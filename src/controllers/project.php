<?php

    require_once("src/model/projectList.php");

    function project()
    {
        $data = generate();
        // $data = getProjects();

        require("template/pages/project.php");
    }