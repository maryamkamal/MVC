<?php
/**
 * Created by PhpStorm.
 * User: dev3
 * Date: 30/05/18
 * Time: 01:30 م
 */

class  Index

{
    public  function  index()
    {

        // show index page with sidebar and
        // top nave menus to navigate to blog / users
        // add blog and add user and logout
        load_templete("home/home", ["layout"] );


    }

    public  function  show_404()
    {

        // show_404 error page
        load_templete("home/home", ["layout"] );


    }
}











