<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'root'; // Password
$db_name = 'my_blog'; // Database Name

$config=[];

$config["url"] = "http://localhost/mvc/";


// MySQL database host name
defined('DB_HOST')? null:define("DB_HOST",$db_host);

// MySQL database  name
defined('DB_NAME')? null:define("DB_NAME",$db_name);


// MySQL database  username
defined('DB_USER')? null:define("DB_USER",$db_user);

// MySQL database  password

defined('DB_PASSWORD')? null:define("DB_PASSWORD",$db_pass);

//SITE URL
defined('SITE_URL')? null:define("SITE_URL",$config["url"]);

//SITE PATH

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_PATH') ? null :
define('SITE_PATH',  'c:' . DS . 'wamp64' .DS .'www' . DS . 'mvc');

// MySQL database  conction type
// can be only '0' or '1'
// set '0' for using the mysql_pconnect
// set '1' for using the mysql_connect
define('DB_CON_TYPE','0');
