<?
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Contains the file attribute key and value objects.
 * @package Pages
 * @author Andrew Embler <andrew@concrete5.org>
 * @category Concrete
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 *
 */
/**
 * An object that represents metadata added to files. 
 * @author Andrew Embler <andrew@concrete5.org>
 * @package Pages
 * @category Concrete
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 *
 */
class FileAttributeKey extends AttributeKey {

	public function getIndexedSearchTable() {
		return 'FileSearchIndexAttributes';
	}
	
	/** 
	 * Returns an attribute value list of attributes and values (duh) which a collection version can store 
	 * against its object.
	 * @return AttributeValueList
	 */
	public function getAttributes($fID, $fvID) {
		$db = Loader::db();
		$values = $db->GetAll("select akID, avID from FileAttributeValues where fID = ? and fvID = ?", array($fID, $fvID));
		$avl = new AttributeValueList();
		foreach($values as $val) {
			$ak = FileAttributeKey::getByID($val['akID']);
			$value = $ak->getAttributeValue($val['avID']);
			$avl->addAttributeValue($ak, $value);
		}		
		return $avl;
	}
	
	public function getAttributeValue($avID) {
		$av = FileAttributeValue::getByID($avID);
		if (is_object($av)) {
			$av->setAttributeKey($this);
			return $av->getValue();
		}
	}
	
	public static function getByID($akID) {
		$ak = new FileAttributeKey();
		$ak->load($akID);
		return $ak;	
	}

	public static function getByHandle($akHandle) {
		$db = Loader::db();
		$akID = $db->GetOne('select akID from AttributeKeys where akHandle = ?', array($akHandle));
		if ($akID > 0) {
			$ak = new FileAttributeKey();
			$ak->load($akID);
			return $ak;
		} else {
			 // else we check to see if it's listed in the initial registry
			 $ia = FileTypeList::getImporterAttribute($akHandle);
			 if (is_object($ia)) {
			 	// we create this attribute and return it.
			 	$at = AttributeType::getByHandle($ia->akType);
			 	$atID = $at->getAttributeTypeID();
			 	return FileAttributeKey::add($akHandle, $ia->akName, 1, 1, $ia->akIsEditable, $atID);
			 }
		}	
	}
	
	public static function getList() {
		return parent::getList('file');	
	}

	public static function getSearchableList() {
		return parent::getList('file', array('akIsSearchable' => 1));	
	}

	public static function getImporterList() {
		return parent::getList('file', array('akIsAutoCreated' => 1));	
	}

	public static function getUserAddedList() {
		return parent::getList('file', array('akIsAutoCreated' => 0));	
	}
	
	/** 
	 * @access private 
	 */
	public function get($akID) {
		return FileAttributeKey::getByID($akID);
	}
	
	protected function saveAttribute($f, $value = false) {
		// We check a cID/cvID/akID combo, and if that particular combination has an attribute value ID that
		// is NOT in use anywhere else on the same cID, cvID, akID combo, we use it (so we reuse IDs)
		// otherwise generate new IDs
		$av = $f->getAttributeValueObject($this, true);
		parent::saveAttribute($av, $value);
		$db = Loader::db();
		$v = array($f->getFileID(), $f->getFileVersionID(), $this->getAttributeKeyID(), $av->getAttributeValueID());
		$db->Replace('FileAttributeValues', array(
			'fID' => $f->getFileID(), 
			'fvID' => $f->getFileVersionID(), 
			'akID' => $this->getAttributeKeyID(), 
			'avID' => $av->getAttributeValueID()
		), array('fID', 'fvID', 'akID'));
		$f->logVersionUpdate(FileVersion::UT_EXTENDED_ATTRIBUTE, $this->getAttributeKeyID());
		$fo = $f->getFile();
		$fo->reindex();
		$f->populateAttributes();
	}
	
	public function add($akHandle, $akName, $akIsSearchable, $akIsAutoCreated, $akIsEditable, $atID) {
		$ak = parent::add('file', $akHandle, $akName, $akIsSearchable, $akIsAutoCreated, $akIsEditable, $atID);
		return $ak;
	}
	
	public static function getColumnHeaderList() {
		return parent::getList('file', array('akIsColumnHeader' => 1));	
	}

	
	public function delete() {
		parent::delete();
		$db = Loader::db();
		$r = $db->Execute('select avID from FileAttributeValues where akID = ?', array($this->getAttributeKeyID()));
		while ($row = $r->FetchRow()) {
			$db->Execute('delete from AttributeValues where avID = ?', array($row['avID']));
		}
		$db->Execute('delete from FileAttributeValues where akID = ?', array($this->getAttributeKeyID()));
	}

}

class FileAttributeValue extends AttributeValue {

	public function setFile($f) {
		$this->f = $f;
	}
	
	public static function getByID($avID) {
		$fav = new FileAttributeValue();
		$fav->load($avID);
		if ($fav->getAttributeValueID() == $avID) {
			return $fav;
		}
	}

	public function delete() {
		parent::delete();
		$db = Loader::db();
		$db->Execute('delete from FileAttributeValues where fID = ? and fvID = ? and akID = ? and avID = ?', array(
			$this->f->getFileID(), 
			$this->f->getFileVersionID(),
			$this->attributeKey->getAttributeKeyID(),
			$this->getAttributeValueID()
		));
	}
}