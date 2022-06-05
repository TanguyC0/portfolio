<?php

    require_once("src/model/database/useful.php");
    require_once("src/controllers/garde.php");
    require_once("src/controllers/projectList.php");
    require_once("src/controllers/project.php");
    require_once("src/controllers/contact.php");
    require_once("src/controllers/cv.php");
    require_once("src/controllers/home.php");

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
        else
        {
            $page = '404';
        }
    }
    else
    {
        garde();
    }
