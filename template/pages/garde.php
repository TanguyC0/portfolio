<?php 
    $title = "index"; 
    $specificCSS = '<link rel="stylesheet" href="./style/index.css">';
?>

<?php 
    ob_start(); 
?>

<section class="main">
    <article id="gauche">
    </article>
    <article id="droite">
        <h1>Portfolio</h1>
        <p>
            Bienvenue sur mon portfolio. Vous trouverez ici mes réalisations et mes projets.
            Vous trouverez aussi mes informations personnelles, mes compétences et mes expériences ainci que mon CV.
            Le site est en cours de développement donc certaines pages ne sont pas encore disponibles ou ne sont pas complètes.
        </p>
        <p>
            Pour accedé à mes réalisations, mes projets, mes informations personnelles, mes compétences et mes expériences, cliquez sur les liens ci-dessous.
        </p>
        <a href="./index.php?link=home">
            acces au site ici
        </a>
    </article>
</section>

<?php 
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>