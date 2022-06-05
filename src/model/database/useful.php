<?php

    function loginDB()
    {
        require_once("src/model/database/secret.php");
        try
        {
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $userpswd);
            return $conn;
        }
        catch(PDOException $e)
        {
            die("Connection failed: " . $e->getMessage());
        }
    }