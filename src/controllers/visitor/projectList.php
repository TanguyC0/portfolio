<?php

    require_once("src/model/visitor/projectList.php");

    function projectList()
    {
        $data = getListProjects();

        require("template/pages/visitor/projectList.php");
    }