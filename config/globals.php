
<?php

//configuration file
require_once 'config.php' ;


/// set the meta value for evry site
$config['meta']='http-equiv="Content-Type" content="text/html; charset=UTF-8"';


//set to 1 if your are debuging the script
$config['test_mod']	= 0;

$config['timezone'] = 'Africa/Cairo';


/* set the cookies time
wen user save thire password
how longe the site should remeber it
1         = 1 secund;
60        = 1 menite;
3600      = 1 houre;
86400     = 1 daye;
604800    = 1 week;
25922000  = 1 mounth ==  this is defullt value :D */
define('COOKI_TIME',25922000);

$config['home'] = 'index.php';
//this is the app folder name under DOCUMENT_ROOT
$config['app_name'] = "mvc/";

//configure the site root and all the directury here configration

define('DIR_APP',$config['app_name']);
define('DIR_ROOT',$_SERVER["DOCUMENT_ROOT"].DS);


define('DIR_INCLUDE',DIR_ROOT.DIR_APP.DS.'include');
define('DIR_SYSTEM',DIR_ROOT.DIR_APP.DS.'include'.DS.'system'.DS);
define('DIR_MODELS',DIR_ROOT.DIR_APP.DS.'include/models/');
define('DIR_CONTROLLERS',DIR_ROOT.DIR_APP.DS.'include/controllers/');

define('DIR_LIBS',DIR_INCLUDE.DS.'libs/');

define('DIR_VIEWS', DIR_ROOT.DIR_APP.DS.'views');

define('DIR_ELEMENTS', DIR_VIEWS.DS.'elements' . DS . 'default');
define('DIR_LAYOUTS', DIR_VIEWS.DS.'layouts');
define('DIR_MAIN_CONTENT', DIR_VIEWS.DS.'main_content');

?>

