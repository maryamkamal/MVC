<?php


class Client extends Crud
{

    public $table_name= "client";
    public $db_fields=array('id','username','password','email');

    public $id;
    public $username;
    public $password;
    public $email;





}

$client = new Client();

?>