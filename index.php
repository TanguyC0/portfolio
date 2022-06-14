<?php

    require_once("src/model/database/useful.php");
    require_once("src/controllers/garde.php");
    require_once("src/controllers/visitor/projectList.php");
    require_once("src/controllers/visitor/project.php");
    require_once("src/controllers/visitor/contact.php");
    require_once("src/controllers/visitor/cv.php");
    require_once("src/controllers/visitor/home.php");
    require_once("src/controllers/admin/admin.php");

    if(isset($_GET['link']) && !empty($_GET['link']))
    {
        if($_GET['link'] == 'home')
        {
            home();
        }
        else if($_GET['link'] == 'projectList')
        {
            projectList();
        }
        else if($_GET['link'] == 'project')
        {
            project();
        }
        else if($_GET['link'] == 'cv')
        {
            cv();
        }
        else if($_GET['link'] == 'contact')
        {
            contact();
        }
        else if($_GET['link'] == 'admin')
        {
            admin();
        }
        else
        {
            $page = '404';
        }
    }
    else
    {
        garde();
    }
