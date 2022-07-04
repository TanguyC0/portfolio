<?php

    require_once("src/model/admin/admin.php");

    function admin()
    {

        if (isset($_POST['bodyDescription'])) 
        {
            addProject();
        }


        require("template/pages/admin/admin.php");
    }