<?php

    require_once("src/model/visitor/project.php");

    function project()
    {
        $data = getProject();

        require("template/pages/visitor/project.php");
    }