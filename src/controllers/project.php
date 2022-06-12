<?php

    require_once("src/model/project.php");

    function project()
    {
        $data = generate();
        // $data = getProjects();

        require("template/pages/project.php");
    }