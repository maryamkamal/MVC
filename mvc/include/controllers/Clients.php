<?php
/**
 * Created by PhpStorm.
 * User: dev3
 * Date: 29/05/18
 * Time: 01:46 م
 */


class Clients
{

    public $client;
    public $data=[];

    public function __construct()
    {
        $this->client= new Client();

    }

    public function index()
    {
        // show list user form
        $client = $this->client->find_all();
        $data["client"]=$client;

        load_templete("clients/list_client",$data);
        //end of list user form

    }

    public  function add()
    {
        $result=[];

        $data["result"]=$result;
        $data["data"]=$data;

        if(isset($_POST['Add']))
        {
            $data=$_POST;

            $result= $this->client->insert($data);


            if($result) {

                redirect("index.php?action=clients/index");
            }
        }

        load_templete("clients/add_client",$data);
    }

    public  function edit($id)
    {

        $clientData = $this->client->find_by_id($id);
        $result=[];

        $data["id"]=$id;
        $data["clientData"]=$clientData;
        $data["result"]=$result;

        if(isset($_POST['edit']))
        {
            $data=$_POST;
            $id =$data['id'] ;

            $result=$this->client->edit($id,$data);

            if($result){

                redirect("index.php?action=clients/index");
            }
        }
        load_templete("clients/edit_client", ["id"=>$id,"clientData"=>$clientData]  );


    }
    public  function view($id)
    {
        //$id =$_GET['id'] ;

        $clientData = $this->client->find_by_id($id);
        $data["id"] = $id;
        $data["clientData"] = $clientData;

        load_templete("clients/view_client", ["id"=>$id,"clientData"=>$clientData] );



    }

    public  function delete($id)
    {
        //$id = $_GET['id'] ;
        $clientDelete =$this->client->delete($id);

        $data["id"]=$id;
        $data["clientDelete"]=$clientDelete;

        if($clientDelete){


            redirect("index.php?action=clients/index");
        }

        load_templete("clients/delete_client",$data);


    }



}







?>