<?php $title = "liste des projets"; ?>

<?php ob_start(); ?>
<section class="Quarter">
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

<?php $content = ob_get_clean(); ?>

<?php require('template/layout.php'); ?>