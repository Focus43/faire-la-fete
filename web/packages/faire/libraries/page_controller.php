<?php defined('C5_EXECUTE') or die("Access Denied.");

    class FairePageController extends Controller {

        const AGE_COOKIE_HANDLE = 'age_verification';

        /** @property $supportsPageCache bool */
        protected $supportsPageCache = true;

        /** @property $_includeThemeAssets bool */
        protected $_includeThemeAssets = false;

        /** @property $_canEdit bool : Set in on_start method */
        protected $_canEdit = false;

        /** @property $_isEditMode bool : Set in on_start method */
        protected $_isEditMode = false;

        /** @property $_bodyClass string */
        protected $_bodyClass = '';

        protected $_forceAgeVerification = true;

        /**
         * Base controller's view method.
         * @return void
         */
        public function view(){
            if( $this->_includeThemeAssets === true ){
                $this->attachThemeAssets( $this );
            }
        }


        /**
         * @return void
         */
        public function on_start(){
            if( $this->_forceAgeVerification ){
                $this->ageVerification();
            }

            $this->set('bodyClass', $this->_bodyClass);

            $this->_canEdit     = $this->pagePermissionObject()->canWrite();
            $this->_isEditMode  = $this->getCollectionObject()->isEditMode();

            $this->set('canEdit', $this->_canEdit);
            $this->set('isEditMode', $this->_isEditMode);

            $classes = array();
            if( $this->_canEdit ){ array_push($classes, 'cms-admin'); }
            if( $this->_isEditMode ){ array_push($classes, 'cms-editing'); }
            $this->set('cmsClasses', join(' ', $classes));
        }


        /**
         * Has the age been verified (ie. is the cookie set?). If not, redirect
         * to verify_age single page, and pass the request URL of the current page
         * as a query param.
         * @return void
         */
        protected function ageVerification(){
            if( ! ((bool)((int)$_COOKIE[self::AGE_COOKIE_HANDLE]) === true) ){
                header(sprintf("Location: ./verify_age?%s", http_build_query(array(
                    'fwd' => Request::get()->getRequestCollectionPath()
                ))));
                exit;
            }
        }


        /**
         * Include css/js assets in page output.
         * @param $pageController Controller : Forces the page controller to be injected!
         * @return void
         */
        public function attachThemeAssets( Controller $pageController ){
            // CSS
            $pageController->addHeaderItem('<link href="http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic|IM+Fell+DW+Pica+SC|Crimson+Text:400,600,400italic,600italic,700" rel="stylesheet" type="text/css">');
            $pageController->addHeaderItem( $this->getHelper('html')->css('core.css', FairePackage::PACKAGE_HANDLE) );
            $pageController->addHeaderItem( $this->getHelper('html')->css('app.css', FairePackage::PACKAGE_HANDLE) );
            // JS
            $pageController->addFooterItem( $this->getHelper('html')->javascript('core.js', FairePackage::PACKAGE_HANDLE) );
            $pageController->addFooterItem( $this->getHelper('html')->javascript('app.js', FairePackage::PACKAGE_HANDLE) );
            // LiveReload (if local dev environment)
            $test1 = (bool) isset($_SERVER['VAGRANT_VM']);
            $test2 = (bool) $_SERVER['VAGRANT_VM'];
            $test3 = (bool) (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false);
            if( $test1 && $test2 && $test3 ){
                //$pageController->addFooterItem('<script src="//localhost:35729/livereload.js"></script>');
            }
        }


        /**
         * Memoize helpers (beware, once loaded its always the same instance).
         * @param string $handle Handle of the helper to load
         * @param bool | Package $pkg Package to get the helper from
         * @return ...Helper class of some sort
         */
        public function getHelper( $handle, $pkg = false ){
            $helper = '_helper_' . preg_replace("/[^a-zA-Z0-9]+/", "", $handle);
            if( $this->{$helper} === null ){
                $this->{$helper} = Loader::helper($handle, $pkg);
            }
            return $this->{$helper};
        }


        /**
         * Get the Concrete5 permission object for the given page.
         * @return Permissions
         */
        protected function pagePermissionObject(){
            if( $this->_pagePermissionObj === null ){
                $this->_pagePermissionObj = new Permissions( $this->getCollectionObject() );
            }
            return $this->_pagePermissionObj;
        }

    }