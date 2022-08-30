<?php
/**
 * Created by PhpStorm.
 * User: dev3
 * Date: 27/05/18
 * Time: 01:24 م
 */

class  Users
{

    public  $user;
    public $data=[];

    public function __construct()
    {
        $this->user = new User();

    }

    public function index()
    {

        // show list user form
        $user = $this->user->find_all();
        $data["user"]=$user;

        load_templete("users/list_user",$data);
        //end of list user form

    }


     public function  add()
    {
        // show add user form
        $result=[];
        $data["result"]=$result;
        $data["data"]=$data;

        if (isset($_POST['Add'])) {
            // save user into database
            //redirect to list users
            $data = $_POST;
            $result = $this->user->insert($data);
            if ($result) {
                redirect("index.php?action=users/index");
            }
        }
        load_templete("users/add_user",$data);

        //end of add user form

    }


    public function view($id)
    {
        //$id =$_GET['id'] ;

        $userData = $this->user->find_by_id($id);

        $data["id"]=$id;
        $data["userData"]=$userData;

        load_templete("users/view_user",["id"=>$id,"userData"=>$userData]);


    }

    public function edit($id)
    {
        //$id =$_GET['id'] ;
        $userData = $this->user->find_by_id($id);

        $result=[];
        $data["result"]=$result;
        $data["id"]=$id;
        $data["userData"]=$userData;


        if(isset($_POST['edit']))
        {
            $data=$_POST;
            $id =$data['id'] ;

            $result=$this->user->edit($id,$data);

            if($result){

                redirect("index.php?action=users/index");
            }
        }
        load_templete("users/edit_user",["id"=>$id,"userData"=>$userData]);


    }

    public function delete($id)
    {
        //$id = $_GET['id'] ;
        $userDelete =$this->user->delete($id);

        $data["id"]=$id;
        $data["userDelete"]=$userDelete;

        if($userDelete){


            redirect("index.php?action=users/index");
        }
        load_templete("users/delete_user",$data);

    }
	
    public function login(){
		global $session;
		$session->login();
		
		$login =DIR_ELEMENTS .DS."login.php";
		require($login);
		
	}
	public function logout(){
		global $session;
		$session->logout();
		 redirect("index.php?action=users/login");
}
}