<?php

require_once('./config/bootstrap.php');

$action = (!empty($_REQUEST['action'])) ? $_REQUEST['action'] : "Users/login";
$controller = (!empty($controller)) ? $controller : "show_404";
$coAction = (!empty($coAction)) ? $coAction : "show_404";


$result = explode("/", $action);

$controller = array_shift($result);
$coAction = array_shift($result);
$data = $result;

$controller = ucfirst($controller);

$class_name = "{$controller}";
$class = new $class_name();

call_user_func_array(array($class, $coAction), $data);

