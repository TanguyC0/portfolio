<?php 
    $title = "admin"; 
    $specificCSS = "";
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>
<?php include("template/module/404.html");?>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>