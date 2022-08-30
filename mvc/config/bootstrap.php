<?php
require_once ("globals.php");




//INCLUDE THE SYSTEM HELPER CLASSES

// functions file
require_once(DIR_SYSTEM.'functions.php');
require_once(DIR_SYSTEM.'Crud.php');
require_once(DIR_SYSTEM.'MyDb.php');
require_once(DIR_SYSTEM.'Session.php');



//INCLUDE THE MODELS
require_once(DIR_MODELS.'User.php');
require_once(DIR_MODELS.'Client.php');
require_once(DIR_MODELS.'Post.php');



require_once(DIR_CONTROLLERS.'Users.php');
require_once(DIR_CONTROLLERS.'Clients.php');
require_once(DIR_CONTROLLERS.'Posts.php');


require_once(DIR_LIBS.'libs.php');


//end of file withought php end tage
?>