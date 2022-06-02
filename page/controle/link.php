<?php
    $page = "";

    if (isset($_GET['page'])) 
    {
        $page = $_GET['page'];
        include('../canvas/mainPage.php');
    }
?>