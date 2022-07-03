<?php

    function verifyUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $bdd = loginDB();
        $sqlQuery = $bdd->prepare("SELECT * FROM user WHERE mail = :email AND password = :password");

        $sqlQuery->bindValue(':email', $email, PDO::PARAM_STR);
        $sqlQuery->bindValue(':password', $password, PDO::PARAM_STR);

        $sqlQuery->execute() or die(print_r($sqlQuery->errorInfo()));

        $result = $sqlQuery->fetch();
        $sqlQuery->closeCursor();
        return $result;
    }

    function addUser()
    {
        $username = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $bdd = loginDB();
        $sqlQuery = $bdd->prepare("INSERT INTO user (id,name, password, mail) VALUES (NULL,:username, :password, :email)");

        $sqlQuery->bindValue(':username', $username, PDO::PARAM_STR);
        $sqlQuery->bindValue(':password', $password, PDO::PARAM_STR);
        $sqlQuery->bindValue(':email', $email, PDO::PARAM_STR);

        $sqlQuery->execute() or die(print_r($sqlQuery->errorInfo()));
        $sqlQuery->closeCursor();
    }