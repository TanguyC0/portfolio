<?php 
    $title = "accueil"; 
    $specificCSS = "";
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>
<?php include("template/pages/404.html");?>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>