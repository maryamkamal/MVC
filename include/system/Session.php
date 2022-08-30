<?php


class Session
{

    function __construct()
    {
        session_start();
         
    }
    public function login()
    {
    
		global $db;
		if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            echo "Please Fill in the Blanks";
       }
       else
       {
            $query="select `email`,`password` from `user` where `email`='".$_POST['email']."' and  `password`='".$_POST['password']."'";
			
            $result=$db->query($query);
	 
            if($db->fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['email'];
               redirect("index.php?action=users/index");
            }
			
	}}
            
       }
    
	
	public function logout(){
		if(!empty($_POST["logout"])) {
	unset($_SESSION['email']);
        session_destroy();
        
	}
}}
$session=new Session();