<?php


class User extends Crud {

    public $logged_in=false;

    public $table_name = "user";
    public $db_fields= array('id','username','password','email');

    public $id;
    public $username;
    public $password;
    public $email;

	
	
}
$user= new User();




?>