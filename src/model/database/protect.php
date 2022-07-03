<?php

    function codeToChar()
    {
        foreach($_POST as $key => $value)
        {
            $_POST[$key] = htmlspecialchars($value);
        }
    }