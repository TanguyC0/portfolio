<?php 
    $title = "projet : " . $data["title"]; 
    $specificCSS = '<link rel="stylesheet" href="./style/duo.css">';
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>
<section class="main">
    <article id="gauche">
        <?php
            // foreach($data as $project)
            // {
        ?>
        
            <img src="./img/10x-featured-social-media-image-size.png" alt="" class="duo">
            <img src="./img/fond.jpg" alt="" class="duo">
            <img src="./img/image-2.jpg" alt="" class="duo">

        <?php
            // }
        ?>
        </article>
        <article id="droite">
        <?= $data['title'] ?>
        <?= $data['description'] ?>
        <input type="button" value="acces au projet" onclick="window.location.href='<?=$data['lien'] ?>'">
    </article>
        
</section>

<?php 
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>