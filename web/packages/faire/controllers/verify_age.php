<?php defined('C5_EXECUTE') or die("Access Denied.");

    class VerifyAgeController extends FairePageController {

        protected $supportsPageCache = false;
        protected $_includeThemeAssets = true;
        protected $_forceAgeVerification = false;
        protected $_bodyClass = 'verify-age';


        /**
         * Take the ?fwd param and pass it to the view
         */
        public function view(){
            parent::view();
            $this->set('fwdUrl', $_REQUEST['fwd']);
        }


        /**
         * If age checks out, set the cookie in the returned header, then also
         * set location redirect to the page the user was trying to get to
         * previously.
         */
        public function verify(){
            if( true ){
                setcookie(self::AGE_COOKIE_HANDLE, '1', 0, '/', '', FALSE, FALSE);
                header(sprintf("Location: %s", BASE_URL . $_REQUEST['fwd_to']));
                exit;
            }
        }

    }