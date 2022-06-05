<?php

    require_once("src/model/projectList.php");

    function projectList()
    {
        $data = generate();
        // $data = getProjects();

        require("template/projectList.php");
    }