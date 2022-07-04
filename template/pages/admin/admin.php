<?php 
    $title = "admin"; 
    $specificCSS = "";
    $specificJS = '<script src="https://cdn.tiny.cloud/1/jt6ekfqhj95s02ttg9xa7i0a56miutp6qwx2xgaxp1d9du4u/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
      tinymce.init({selector: "#mytextarea"});</script>';
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>

    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
        <label for="title">titre</label><input type="text" name="title" id="title">
        <br><br>
        <textarea id="mytextarea" name="bodyDescription">description</textarea>
        <br><br>
        <textarea id="mytextarea" name="resumDescription">résumé</textarea>
        <br><br>
        <label for="link">lien</label><input type="url" name="link" id="link">
        <br><br>
        <input type="submit" value="Submit">
    </form>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>




<!-- https://www.tiny.cloud/docs/tinymce/6/cloud-quick-start/ -->