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
            $this->set('formHelper', $this->getHelper('form'));
            $this->set('countries', $this->getHelper('lists/countries')->getCountries());
        }


        /**
         * If age checks out, set the cookie in the returned header, then also
         * set location redirect to the page the user was trying to get to
         * previously.
         * @note: calculations are done against UTC time
         */
        public function verify(){
            if( (int)$_REQUEST['month'] >= 1 && (int)$_REQUEST['day'] >= 1 && (int)$_REQUEST['year'] >= 1 ){
                try {
                    $dtNow   = new DateTime('now', new DateTimeZone('UTC'));
                    $dtBirth = DateTime::createFromFormat('n-j-Y', sprintf('%s-%s-%s', (int)$_REQUEST['month'], (int)$_REQUEST['day'], (int)$_REQUEST['year']));
                    if( is_a($dtNow, 'DateTime') && is_a($dtBirth, 'DateTime') ){
                        $diff = $dtNow->diff($dtBirth, true);
                        // If of age, set cookie and redirect to originally requested page
                        if( (int) $diff->y > 21 ){
                            if( true ){
                                setcookie(self::AGE_COOKIE_HANDLE, '1', 0, '/', '', FALSE, FALSE);
                                header(sprintf("Location: %s", BASE_URL . $_REQUEST['fwd_to']));
                                exit;
                            }
                        }
                    }
                }catch(Exception $e){ /* do nothing */ }
            }

            // Ruh roh, you're too young. Set message.
            $this->view();
            $this->set('underage', true);
        }

    }