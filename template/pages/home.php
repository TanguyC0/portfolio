<?php 
    $title = "accueil"; 
    $specificCSS = "";
?>

<?php ob_start(); 

include("template/pages/404.html");

$content = ob_get_clean(); ?>

<?php require('template/layout.php'); ?>