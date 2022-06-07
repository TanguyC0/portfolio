<?php 
    $title = "cv"; 
    $specificCSS = '<link rel="stylesheet" href="./style/mono.css">';
?>

<?php ob_start(); ?>

<section>
    <article>
        <div>
            <h1>Corman Tanguy</h1>
            <img src="." alt="img" class="profil">
        </div>
        <div>
            <p><img src="img/icon/home.png" alt=""> 226 Rue de la Croix Jurlet 4040 Herstal</p>
            <p><img src="img/icon/birth.png" alt=""> 04 Août 1999</p>
            <p><img src="img/icon/phone.png" alt=""> 0496768659</p>
            <p><img src="img/icon/email.png" alt=""> Corman.Tanguy.CT@gmail,com</p>
        </div>
    </article>

    <article>
        <div>
            <h2>Formation</h2>
            <hr>
            <h3>Septembre 2019 - Juin 2022</h3>
            <h4>Haute Ecole de la Province de Liège - Seraing</h4>
            <p>Informatique de gestion</p>

            <h3>Septembre 2016 - Septembre 2019</h3>
            <h4>Institut Saint-Jean Berchmans - Liège</h4>
            <p>Informatique (technique de transition)</p>

            <h3>Septembre 2015 - Septembre 2016</h3>
            <h4>Institut Notre Dame de Jupille - Jupille</h4>
            <p>Bio technique (technique de transition)</p>

            <h3>Septembre 2012 - Septembre 2015</h3>
            <h4>Athénée Royal d'Herstal - Herstal</h4>
            <p>science forte (général)</p>
        </div>
    </article>

    <article>
        <div>
            <h2>Compétences</h2>
            <hr>
            <p>test</p>
        </div>
        <div>
            <h2>Points forts</h2>
            <hr>
            <p>test</p>
        </div>
    </article>

    <article>
        <div>
            <h2>Langues</h2>
            <hr>
            <p>test</p>
        </div>
        <div>
            <h2>Loisirs</h2>
            <hr>
            <p>test</p>
        </div>
    </article>

    <article>
        <div>
            <h2>Disponibilité</h2>
            <hr>
            <p>test</p>
        </div>
    </article>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('template/layout.php'); ?>