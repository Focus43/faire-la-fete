<?php defined('C5_EXECUTE') or die("Access Denied.");

class AgesHelper {

    public function listFormat(){
        return unserialize('a:149:{s:7:"albania";s:7:"Albania";s:7:"algeria";s:7:"Algeria";s:6:"angola";s:6:"Angola";s:9:"argentina";s:9:"Argentina";s:7:"armenia";s:7:"Armenia";s:9:"australia";s:9:"Australia";s:7:"austria";s:8:"Austria ";s:10:"azerbaijan";s:10:"Azerbaijan";s:7:"bahamas";s:7:"Bahamas";s:7:"belarus";s:7:"Belarus";s:7:"belgium";s:8:"Belgium ";s:6:"belize";s:6:"Belize";s:7:"bermuda";s:7:"Bermuda";s:7:"bolivia";s:7:"Bolivia";s:22:"bosnia-and-herzegovina";s:22:"Bosnia and Herzegovina";s:8:"botswana";s:8:"Botswana";s:6:"brazil";s:7:"Brazil ";s:7:"burundi";s:8:"Burundi ";s:8:"cambodia";s:8:"Cambodia";s:8:"cameroon";s:8:"Cameroon";s:6:"canada";s:7:"Canada ";s:10:"cape-verde";s:10:"Cape Verde";s:24:"central-african-republic";s:24:"Central African Republic";s:5:"chile";s:5:"Chile";s:5:"china";s:5:"China";s:8:"columbia";s:8:"Columbia";s:7:"comoros";s:7:"Comoros";s:10:"costa-rica";s:10:"Costa Rica";s:7:"croatia";s:7:"Croatia";s:4:"cuba";s:4:"Cuba";s:6:"cyprus";s:6:"Cyprus";s:14:"czech-republic";s:14:"Czech Republic";s:7:"denmark";s:7:"Denmark";s:18:"dominican-republic";s:18:"Dominican Republic";s:7:"ecuador";s:7:"Ecuador";s:5:"egypt";s:5:"Egypt";s:10:"el-savador";s:10:"El Savador";s:17:"equatorial-guinea";s:17:"Equatorial Guinea";s:7:"eritrea";s:7:"Eritrea";s:7:"estonia";s:7:"Estonia";s:8:"ethiopia";s:8:"Ethiopia";s:4:"fiji";s:5:"Fiji ";s:7:"finland";s:7:"Finland";s:6:"france";s:7:"France ";s:5:"gabon";s:5:"Gabon";s:6:"gambia";s:6:"Gambia";s:7:"georgia";s:7:"Georgia";s:7:"germany";s:8:"Germany ";s:5:"ghana";s:5:"Ghana";s:9:"gibraltar";s:9:"Gibraltar";s:6:"greece";s:6:"Greece";s:9:"guatemala";s:9:"Guatemala";s:13:"guinea-bissau";s:13:"Guinea Bissau";s:6:"guyana";s:6:"Guyana";s:5:"haiti";s:5:"Haiti";s:8:"honduras";s:8:"Honduras";s:9:"hong-kong";s:9:"Hong Kong";s:7:"hungary";s:7:"Hungary";s:7:"iceland";s:7:"Iceland";s:5:"india";s:6:"India ";s:9:"indonesia";s:9:"Indonesia";s:4:"iraq";s:4:"Iraq";s:7:"ireland";s:7:"Ireland";s:6:"israel";s:6:"Israel";s:5:"italy";s:5:"Italy";s:7:"jamaica";s:7:"Jamaica";s:5:"japan";s:5:"Japan";s:6:"jordan";s:6:"Jordan";s:10:"kazakhstan";s:10:"Kazakhstan";s:5:"kenya";s:5:"Kenya";s:9:"kyrgystan";s:9:"Kyrgystan";s:6:"lebano";s:6:"Lebano";s:6:"lesoto";s:6:"Lesoto";s:13:"liechtenstein";s:14:"Liechtenstein ";s:9:"lithuania";s:9:"Lithuania";s:10:"luxembourg";s:10:"Luxembourg";s:5:"macau";s:5:"Macau";s:9:"macedonia";s:9:"Macedonia";s:7:"malasia";s:7:"Malasia";s:5:"malaw";s:5:"Malaw";s:8:"maldives";s:8:"Maldives";s:5:"malta";s:5:"Malta";s:9:"mauritius";s:9:"Mauritius";s:6:"mexico";s:6:"Mexico";s:8:"moldovia";s:8:"Moldovia";s:8:"mongolia";s:8:"Mongolia";s:10:"montenegro";s:10:"Montenegro";s:7:"morocco";s:7:"Morocco";s:10:"mozambique";s:10:"Mozambique";s:7:"namibia";s:7:"Namibia";s:5:"nepal";s:5:"Nepal";s:11:"netherlands";s:12:"Netherlands ";s:11:"new-zealand";s:11:"New Zealand";s:9:"nicaragua";s:9:"Nicaragua";s:5:"niger";s:5:"Niger";s:7:"nigeria";s:7:"Nigeria";s:11:"north-korea";s:11:"North Korea";s:6:"norway";s:6:"Norway";s:4:"oman";s:4:"Oman";s:8:"pakistan";s:8:"Pakistan";s:5:"palau";s:5:"Palau";s:6:"panama";s:6:"Panama";s:16:"papua-new-guinea";s:16:"Papua New Guinea";s:8:"paraguay";s:8:"Paraguay";s:4:"peru";s:4:"Peru";s:11:"philippines";s:11:"Philippines";s:6:"poland";s:6:"Poland";s:8:"portugal";s:8:"Portugal";s:11:"puerto-rico";s:11:"Puerto Rico";s:17:"republic-of-china";s:17:"Republic of China";s:17:"republic-of-congo";s:17:"Republic of Congo";s:7:"romania";s:7:"Romania";s:6:"russia";s:6:"Russia";s:6:"rwanda";s:6:"Rwanda";s:5:"samoa";s:5:"Samoa";s:6:"serbia";s:6:"Serbia";s:10:"seychelles";s:10:"Seychelles";s:9:"singapore";s:9:"Singapore";s:8:"slovakia";s:8:"Slovakia";s:7:"slovena";s:7:"Slovena";s:12:"south-africa";s:12:"South Africa";s:11:"south-korea";s:11:"South Korea";s:5:"spain";s:5:"Spain";s:9:"sri-lanka";s:9:"Sri Lanka";s:5:"sudan";s:5:"Sudan";s:9:"swaziland";s:9:"Swaziland";s:6:"sweden";s:7:"Sweden ";s:11:"switzerland";s:12:"Switzerland ";s:5:"syria";s:5:"Syria";s:8:"tanzania";s:8:"Tanzania";s:8:"thailand";s:8:"Thailand";s:4:"togo";s:4:"Togo";s:7:"tokelau";s:7:"Tokelau";s:5:"tonga";s:5:"Tonga";s:19:"trinidad-and-tobago";s:19:"Trinidad and Tobago";s:7:"tunisia";s:7:"Tunisia";s:6:"turkey";s:6:"Turkey";s:12:"turkmenistan";s:12:"Turkmenistan";s:6:"uganda";s:6:"Uganda";s:7:"ukraine";s:7:"Ukraine";s:14:"united-kingdom";s:14:"United Kingdom";s:13:"united-states";s:14:"United States ";s:28:"united-states-virgin-islands";s:28:"United States Virgin Islands";s:7:"uruguay";s:7:"Uruguay";s:7:"vanuatu";s:7:"Vanuatu";s:9:"venezuela";s:9:"Venezuela";s:7:"vietnam";s:7:"Vietnam";s:6:"zambia";s:6:"Zambia";s:8:"zimbabwe";s:8:"Zimbabwe";}');
    }

    public function ageByCountry(){
        return unserialize('a:149:{s:7:"albania";i:0;s:7:"algeria";i:18;s:6:"angola";i:0;s:9:"argentina";i:18;s:7:"armenia";i:0;s:9:"australia";i:18;s:7:"austria";i:16;s:10:"azerbaijan";i:18;s:7:"bahamas";i:18;s:7:"belarus";i:18;s:7:"belgium";i:16;s:6:"belize";i:18;s:7:"bermuda";i:18;s:7:"bolivia";i:18;s:22:"bosnia-and-herzegovina";i:16;s:8:"botswana";i:18;s:6:"brazil";i:18;s:7:"burundi";i:18;s:8:"cambodia";i:0;s:8:"cameroon";i:18;s:6:"canada";i:18;s:10:"cape-verde";i:18;s:24:"central-african-republic";i:18;s:5:"chile";i:18;s:5:"china";i:18;s:8:"columbia";i:18;s:7:"comoros";i:0;s:10:"costa-rica";i:18;s:7:"croatia";i:18;s:4:"cuba";i:0;s:6:"cyprus";i:17;s:14:"czech-republic";i:18;s:7:"denmark";i:18;s:18:"dominican-republic";i:18;s:7:"ecuador";i:18;s:5:"egypt";i:18;s:10:"el-savador";i:18;s:17:"equatorial-guinea";i:0;s:7:"eritrea";i:18;s:7:"estonia";i:18;s:8:"ethiopia";i:18;s:4:"fiji";i:18;s:7:"finland";i:18;s:6:"france";i:18;s:5:"gabon";i:18;s:6:"gambia";i:18;s:7:"georgia";i:16;s:7:"germany";i:16;s:5:"ghana";i:0;s:9:"gibraltar";i:18;s:6:"greece";i:18;s:9:"guatemala";i:18;s:13:"guinea-bissau";i:0;s:6:"guyana";i:18;s:5:"haiti";i:16;s:8:"honduras";i:18;s:9:"hong-kong";i:18;s:7:"hungary";i:18;s:7:"iceland";i:20;s:5:"india";i:18;s:9:"indonesia";i:21;s:4:"iraq";i:18;s:7:"ireland";i:18;s:6:"israel";i:18;s:5:"italy";i:16;s:7:"jamaica";i:0;s:5:"japan";i:20;s:6:"jordan";i:18;s:10:"kazakhstan";i:21;s:5:"kenya";i:18;s:9:"kyrgystan";i:18;s:6:"lebano";i:18;s:6:"lesoto";i:18;s:13:"liechtenstein";i:16;s:9:"lithuania";i:18;s:10:"luxembourg";i:16;s:5:"macau";i:16;s:9:"macedonia";i:0;s:7:"malasia";i:16;s:5:"malaw";i:18;s:8:"maldives";i:18;s:5:"malta";i:17;s:9:"mauritius";i:18;s:6:"mexico";i:18;s:8:"moldovia";i:18;s:8:"mongolia";i:18;s:10:"montenegro";i:0;s:7:"morocco";i:0;s:10:"mozambique";i:18;s:7:"namibia";i:18;s:5:"nepal";i:18;s:11:"netherlands";i:16;s:11:"new-zealand";i:18;s:9:"nicaragua";i:19;s:5:"niger";i:18;s:7:"nigeria";i:18;s:11:"north-korea";i:18;s:6:"norway";i:0;s:4:"oman";i:21;s:8:"pakistan";i:21;s:5:"palau";i:21;s:6:"panama";i:18;s:16:"papua-new-guinea";i:18;s:8:"paraguay";i:20;s:4:"peru";i:18;s:11:"philippines";i:18;s:6:"poland";i:18;s:8:"portugal";i:18;s:11:"puerto-rico";i:18;s:17:"republic-of-china";i:18;s:17:"republic-of-congo";i:18;s:7:"romania";i:0;s:6:"russia";i:18;s:6:"rwanda";i:18;s:5:"samoa";i:18;s:6:"serbia";i:18;s:10:"seychelles";i:18;s:9:"singapore";i:18;s:8:"slovakia";i:18;s:7:"slovena";i:18;s:12:"south-africa";i:18;s:11:"south-korea";i:19;s:5:"spain";i:18;s:9:"sri-lanka";i:21;s:5:"sudan";i:16;s:9:"swaziland";i:0;s:6:"sweden";i:18;s:11:"switzerland";i:16;s:5:"syria";i:18;s:8:"tanzania";i:18;s:8:"thailand";i:18;s:4:"togo";i:0;s:7:"tokelau";i:16;s:5:"tonga";i:18;s:19:"trinidad-and-tobago";i:18;s:7:"tunisia";i:18;s:6:"turkey";i:18;s:12:"turkmenistan";i:18;s:6:"uganda";i:18;s:7:"ukraine";i:18;s:14:"united-kingdom";i:18;s:13:"united-states";i:21;s:28:"united-states-virgin-islands";i:18;s:7:"uruguay";i:0;s:7:"vanuatu";i:18;s:9:"venezuela";i:18;s:7:"vietnam";i:0;s:6:"zambia";i:18;s:8:"zimbabwe";i:18;}');
    }

}




//$textHelper = Loader::helper('text');
//
//$unformattedList = unserialize('O:8:"stdClass":7:{s:2:"16";a:15:{i:0;s:26:"Austria (18 in some areas)";i:1;s:8:"Belgium*";i:2;s:22:"Bosnia and Herzegovina";i:3;s:8:"Germany*";i:4;s:7:"Georgia";i:5;s:5:"Haiti";i:6;s:5:"Italy";i:7;s:14:"Liechtenstein*";i:8;s:10:"Luxembourg";i:9;s:5:"Macau";i:10;s:7:"Malasia";i:11;s:12:"Netherlands*";i:12;s:5:"Sudan";i:13;s:12:"Switzerland*";i:14;s:7:"Tokelau";}s:2:"17";a:2:{i:0;s:6:"Cyprus";i:1;s:5:"Malta";}s:2:"18";a:101:{i:0;s:7:"Algeria";i:1;s:9:"Argentina";i:2;s:9:"Australia";i:3;s:10:"Azerbaijan";i:4;s:7:"Bahamas";i:5;s:7:"Belarus";i:6;s:6:"Belize";i:7;s:7:"Bermuda";i:8;s:7:"Bolivia";i:9;s:8:"Botswana";i:10;s:29:"Brazil (19 in some provinces)";i:11;s:27:"Burundi (none with parents)";i:12;s:8:"Cameroon";i:13;s:29:"Canada (19 in some provinces)";i:14;s:10:"Cape Verde";i:15;s:24:"Central African Republic";i:16;s:5:"Chile";i:17;s:5:"China";i:18;s:8:"Columbia";i:19;s:10:"Costa Rica";i:20;s:7:"Croatia";i:21;s:14:"Czech Republic";i:22;s:7:"Denmark";i:23;s:18:"Dominican Republic";i:24;s:7:"Ecuador";i:25;s:5:"Egypt";i:26;s:10:"El Savador";i:27;s:7:"Eritrea";i:28;s:7:"Estonia";i:29;s:8:"Ethiopia";i:30;s:30:"Fiji (lowered from 21 in 2009)";i:31;s:7:"Finland";i:32;s:34:"France (no minimum age in private)";i:33;s:5:"Gabon";i:34;s:6:"Gambia";i:35;s:9:"Gibraltar";i:36;s:6:"Greece";i:37;s:9:"Guatemala";i:38;s:6:"Guyana";i:39;s:8:"Honduras";i:40;s:9:"Hong Kong";i:41;s:7:"Hungary";i:42;s:23:"India (varies by state)";i:43;s:4:"Iraq";i:44;s:7:"Ireland";i:45;s:6:"Israel";i:46;s:6:"Jordan";i:47;s:5:"Kenya";i:48;s:9:"Kyrgystan";i:49;s:6:"Lebano";i:50;s:6:"Lesoto";i:51;s:9:"Lithuania";i:52;s:5:"Malaw";i:53;s:8:"Maldives";i:54;s:9:"Mauritius";i:55;s:6:"Mexico";i:56;s:8:"Moldovia";i:57;s:8:"Mongolia";i:58;s:10:"Mozambique";i:59;s:7:"Namibia";i:60;s:5:"Nepal";i:61;s:11:"New Zealand";i:62;s:5:"Niger";i:63;s:7:"Nigeria";i:64;s:11:"North Korea";i:65;s:6:"Panama";i:66;s:16:"Papua New Guinea";i:67;s:4:"Peru";i:68;s:11:"Philippines";i:69;s:11:"Puerto Rico";i:70;s:6:"Poland";i:71;s:8:"Portugal";i:72;s:17:"Republic of China";i:73;s:17:"Republic of Congo";i:74;s:6:"Russia";i:75;s:6:"Rwanda";i:76;s:5:"Samoa";i:77;s:6:"Serbia";i:78;s:10:"Seychelles";i:79;s:9:"Singapore";i:80;s:8:"Slovakia";i:81;s:7:"Slovena";i:82;s:12:"South Africa";i:83;s:5:"Spain";i:84;s:36:"Sweden (none for low proof beverage)";i:85;s:5:"Syria";i:86;s:8:"Tanzania";i:87;s:8:"Thailand";i:88;s:5:"Tonga";i:89;s:19:"Trinidad and Tobago";i:90;s:7:"Tunisia";i:91;s:6:"Turkey";i:92;s:12:"Turkmenistan";i:93;s:6:"Uganda";i:94;s:7:"Ukraine";i:95;s:14:"United Kingdom";i:96;s:28:"United States Virgin Islands";i:97;s:7:"Vanuatu";i:98;s:9:"Venezuela";i:99;s:6:"Zambia";i:100;s:8:"Zimbabwe";}s:2:"19";a:2:{i:0;s:9:"Nicaragua";i:1;s:11:"South Korea";}s:2:"20";a:3:{i:0;s:7:"Iceland";i:1;s:5:"Japan";i:2;s:8:"Paraguay";}s:2:"21";a:8:{i:0;s:0:"";i:1;s:9:"Indonesia";i:2;s:10:"Kazakhstan";i:3;s:4:"Oman";i:4;s:8:"Pakistan";i:5;s:5:"Palau";i:6;s:9:"Sri Lanka";i:7;s:47:"United States (with many exceptions, see below)";}s:4:"None";a:19:{i:0;s:7:"Albania";i:1;s:6:"Angola";i:2;s:7:"Armenia";i:3;s:8:"Cambodia";i:4;s:7:"Comoros";i:5;s:4:"Cuba";i:6;s:17:"Equatorial Guinea";i:7;s:5:"Ghana";i:8;s:13:"Guinea-Bissau";i:9;s:7:"Jamaica";i:10;s:9:"Macedonia";i:11;s:10:"Montenegro";i:12;s:7:"Morocco";i:13;s:6:"Norway";i:14;s:7:"Romania";i:15;s:9:"Swaziland";i:16;s:4:"Togo";i:17;s:7:"Uruguay";i:18;s:7:"Vietnam";}}');
//
//$keyValuePairs = array();
//$ageByCountry  = array();
//
//foreach($unformattedList AS $age => $countryList){
//    foreach($countryList AS $country){
//        if( !empty($country) ){
//            $stripped = preg_replace(array('/\([^)]+\)/', '/[\W_]/'), array('', ' '), $country);
//            $keyValuePairs[$textHelper->handle($stripped)] = $stripped;
//            $ageByCountry[$textHelper->handle($stripped)]  = (int)$age;
//        }
//    }
//}
//
//ksort($keyValuePairs);
//ksort($ageByCountry);

//echo serialize($keyValuePairs);
//echo serialize($ageByCountry);
//exit;
