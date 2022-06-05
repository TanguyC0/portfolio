<?php

    require_once("src/model/projectList.php");

    function projectList()
    {
        $data = getListProjects();

        require("template/pages/projectList.php");
    }