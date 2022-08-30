<?php


 class Post extends Crud{

     public $table_name="post";
     public $db_fields= array('id','title','user_id','date','body');

     public $id;
     public $title;
     public $user_id;
     public $date;
     public $content;




 }


$post= new Post();


?>