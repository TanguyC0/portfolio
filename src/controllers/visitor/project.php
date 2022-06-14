<?php

    require_once("src/model/visitor/project.php");

    function project()
    {
        $data = generate();
        // $data = getProjects();

        require("template/pages/visitor/project.php");
    }