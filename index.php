<?php

    require_once("src/controllers/garde.php");
    require_once("src/controllers/projectList.php");
    require_once("src/controllers/project.php");

    if(isset($_GET['link']) && !empty($_GET['link']))
    {
        if($_GET['link'] == 'projectList')
        {
            projectList();
        }
        else if($_GET['link'] == 'project')
        {
            project();
        }
        else if($_GET['link'] == 'tmp')
        {
            $page = 'tmp';
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
