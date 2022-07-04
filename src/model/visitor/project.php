<?php

    function getProject()
    {
        $id = $_GET['id'];

        $bdd = loginDB();
        $sqlQuery = $bdd->prepare("SELECT title,description,lien FROM projects WHERE id = :id");

        $sqlQuery->bindValue(':id', $id, PDO::PARAM_STR);

        $sqlQuery->execute() or die(print_r($sqlQuery->errorInfo()));

        $result = $sqlQuery->fetch();
        $sqlQuery->closeCursor();
        return $result;
    }