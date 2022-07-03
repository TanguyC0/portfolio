<?php

    require_once("src/model/admin/login.php");
    require_once("src/model/database/protect.php");

    function login()
    {
        if(!isset($_SESSION['login']) && empty($_SESSION['login']))
        {
            if (isset($_POST['submitLogon'])) 
            {
                codeTochar();
                if(!verifyUser())
                {
                    addUser();
                    echo "inscription réussie";
                }
                else
                {
                    echo "erreur d'inscription";
                }
            }
            else if (isset($_POST['submitLogin'])) 
            {
                echo "connexion réussie";
                $result = verifyUser();
                if ($result)
                {
                    $_SESSION['login'] = $result['name'];
                    $_SESSION['mail'] = $result['mail'];
                    header("Location: index.php");
                }
                else
                {
                    echo "erreur de connexion";
                }
            }
        }
        else
        {
            session_destroy();
            header("Location: index.php");
        }

        require("template/pages/admin/login.php");
    }