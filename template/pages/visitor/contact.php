<?php 
    $title = "contact"; 
    $specificCSS = '<link rel="stylesheet" href="./style/mono.css">';
    $mail = "Corman.Tanguy.CT@gmail.com";
    $phone = "+32496768659";
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>

<section class="mono">
    <article>
        <div>
            <h1>Par où me contacter?</h1>
            <ul class="mono">
                <li class="mono"><p>Mon mail : <a href="mailto:<?= $mail; ?>"><?= $mail; ?></a>.</p></li>
                <li class="mono"><p>Mon numéro de téléphone : <a href="tel:<?= $phone; ?>"><?= $phone; ?></a>.</p></li>
                <li class="mono"><p>Mon adresse : <a href="">226 Rue de la Croix Jurlet 4040 Herstal</a></p></li>
            </ul>
        </div>
    </article>
</section>
<section class="mono">
    <article>
        <div>
            <h1>m'envoyer un message</h1>
            <mark>fonctionnaliter non disponible pour le moment</mark>
            <form action="" method="post">
                <label for="email">email <mark>*</mark></label> <input type="email" name="email" id="email" value="<?= $_SESSION["mail"]?>" required><br>
                <label for="sujet">sujet <mark>*</mark></label> <input type="text" name="sujet" id="sujet" required><br>
                <label for="message">message <mark>*</mark></label> <textarea name="message" id="message" rows="10" required></textarea><br>
            </form>
        <div>
    </article>
</section>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>