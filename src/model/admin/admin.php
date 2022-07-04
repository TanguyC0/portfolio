<?php

    function addProject()
    {
        $title = $_POST['title'];
        $description = $_POST['bodyDescription'];
        $resum = $_POST['resumDescription'];
        $link = $_POST['link'];

        $bdd = loginDB();
        $sqlQuery = $bdd->prepare("INSERT INTO projects (id,title,resume,description,lien) VALUES (NULL,:title,:resum,:description,:link)");

        $sqlQuery->bindValue(':description', $description, PDO::PARAM_STR);
        $sqlQuery->bindValue(':resum', $resum, PDO::PARAM_STR);
        $sqlQuery->bindValue(':title', $title, PDO::PARAM_STR);
        $sqlQuery->bindValue(':link', $link, PDO::PARAM_STR);

        $sqlQuery->execute() or die(print_r($sqlQuery->errorInfo()));
        $sqlQuery->closeCursor();
    }