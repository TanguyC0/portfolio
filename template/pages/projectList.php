<?php 
    $title = "liste des projets"; 
    $specificCSS = '<link rel="stylesheet" href="./style/listeQuadr.css">';
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>
<section class="main">
    <?php
        foreach($data as $project)
        {
    ?>
        <article class="Quarter">
            <a href="./index.php?link=project" class="Quarter">
                <h1 class="Quarter"> <?= $project["title"]; ?></h1>
                <img src="img/<?= $project["picture"]; ?>" alt="" class="Quarter">
                <p class="Quarter"> <?= $project["abstract"]; ?> </p>
            </a>
        </article>
    <?php
        }
    ?>
        
</section>

<?php 
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>