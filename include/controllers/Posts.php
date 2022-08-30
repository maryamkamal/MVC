<?php
/**
 * Created by PhpStorm.
 * User: dev3
 * Date: 29/05/18
 * Time: 02:09 م
 */


class Posts
{
    public $post;
    public $data=[];


    public function __construct()
    {
        $this->post= new Post();

    }


    public function index()
    {
        $post = $this->post->find_all();
        $data["post"]=$post;

        load_templete("post/list_post", $data );

    }
    public  function  add()
    {
        $result=[];
        $data["data"]=$_POST;
        $data["result"]=$result;
        if (isset($_POST['Add'])) {
            // save user into database
            //redirect to list users
            $data = $_POST;
            $result = $this->post->insert($data);

            if ($result) {
                redirect("index.php?action=posts/index");
            }
        }
        load_templete("post/add_post", $data );

    }
    public function  view($id)
    {

        //$id =$_GET['id'] ;
        $postData = $this->post->find_by_id($id);

        $data["id"]=$id;
        $data["postData"]=$postData;

        load_templete("post/view_post", ["id"=>$id,"postData"=>$postData] );

    }
    public  function  edit($id)
    {

       // $id =$_GET['id'] ;
        $postData = $this->post->find_by_id($id);
        $result=[];

        $data["id"]=$id;
        $data["postData"]=$postData;
        $data["result"]=$result;

        if(isset($_POST['edit']))
        {
            $data=$_POST;
            $id =$data['id'] ;

            $result=$this->post->edit($id,$data);

            if($result){

                redirect("index.php?action=posts/index");
            }
        }
        load_templete("post/edit_post", ["id"=>$id,"postData"=>$postData] );


    }
    public  function delete($id)
    {
        //$id = $_GET['id'] ;

        $postDelete =$this->post->delete($id);

        $data["id"]=$id;
        $data["$postDelete"]=$postDelete;

        if($postDelete){

            redirect("index.php?action=posts/index");
        }

        load_templete("post/delete_post", $data );

    }





}







?>