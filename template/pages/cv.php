<?php 
    $title = "cv"; 
    $specificCSS = '<link rel="stylesheet" href="./style/mono.css">';
?>

<?php ob_start(); ?>

<section>
    <article>
        <div>
            
            <h1><img src="./img/cv/profil.jpg" alt="img" class="profil"> Corman Tanguy</h1>
            
        </div>
        <div>
            <ul class="mono">
                <li class="mono">
                    <p><img src="img/icon/home.png" alt="" class="logo"> 226 Rue de la Croix Jurlet 4040 Herstal</p>
                </li>
                <li class="mono">
                    <p><img src="img/icon/birth.png" alt="" class="logo"> 04 Août 1999</p>
                </li>
                <li class="mono">
                    <p><img src="img/icon/phone.png" alt="" class="logo"> 0496768659</p>
                </li>
                <li class="mono">
                    <p><img src="img/icon/email.png" alt="" class="logo"> Corman.Tanguy.CT@gmail,com</p>
                </li>
            </ul>
        </div>
    </article>

    <article>
        <div>
            <h2>Formation</h2>
            <hr>
            <ul class="mono">
                <li class="mono">
                    <h3>Septembre 2019 - Juin 2022</h3>
                    <h4>Haute Ecole de la Province de Liège - Seraing</h4>
                    <p>Informatique de gestion</p>
                </li>
                <li class="mono">
                    <h3>Septembre 2016 - Septembre 2019</h3>
                    <h4>Institut Saint-Jean Berchmans - Liège</h4>
                    <p>Informatique (technique de transition)</p>
                </li>
                <li class="mono">
                    <h3>Septembre 2015 - Septembre 2016</h3>
                    <h4>Institut Notre Dame de Jupille - Jupille</h4>
                    <p>Bio technique (technique de transition)</p>
                </li>
                <li class="mono">
                    <h3>Septembre 2012 - Septembre 2015</h3>
                    <h4>Athénée Royal d'Herstal - Herstal</h4>
                    <p>science forte (général)</p>
                </li>
            </ul>
        </div>
        <div>
            <h2>diplome</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>CESS (2019)</p></li>
                <li class="mono"><p>CE1D (2014)</p></li>
                <li class="mono"><p>CEB (2012)</p></li>
            </ul>
        </div>
    </article>

    <article>
        <div>
            <h2>Compétences</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>programation niveau intermédiaire : HTML, CSS, PHP, PYTHON 3 </p></li>
                <li class="mono"><p>programation niveau débutant : javascript, SQL, C, C++</p></li>
                <li class="mono"><p>traitement de texte basique : powerpoint, world, exel</p></li>
            </ul>
        </div>
        <div>
            <h2>Points forts</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>Organisé</p></li>
                <li class="mono"><p>Ponctuel</p></li>
            </ul>
        </div>
    </article>

    <article>
        <div>
            <h2>Langues</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>Francais : langue maternelle</p></li>
                <li class="mono"><p>Anglais : A1-A2</p></li>
            </ul>
        </div>
        <div>
            <h2>Loisirs</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>Vélo</p></li>
                <li class="mono"><p>technologie - programmation</p></li>
                <li class="mono"><p>vidéo détente</p></li>
            </ul>
        </div>
    </article>

    <article>
        <div>
            <h2>Disponibilité</h2>
            <hr>
            <ul class="mono">
                <li class="mono"><p>Tout les jours de 8H30 à 17h30</p></li>
            </ul>
        </div>
    </article>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('template/layout.php'); ?>