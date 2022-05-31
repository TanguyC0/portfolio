<?php
    $page = "";

    if (isset($_GET['page'])) 
    {
        $page = $_GET['page'];
        include('../modul/'.$page.'.html');
    }
?>