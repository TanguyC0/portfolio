<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title?></title>

        <link rel="stylesheet" href="./style/main.css">
        <?= $specificCSS ?>
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li class="menu"><a href="index.php?link=home">Accueil</a></li>
                <li class="menu"><a href="./index.php?link=cv">CV</a></li>
                <li class="menu"><a href="./index.php?link=projectList">Projet</a></li>
                <li class="menu"><a href="./index.php?link=contact">Contact</a></li>
            </ul>
        </nav>
        
        <?= $content ?>

        <footer>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempora quaerat architecto sint consequuntur maxime porro fugiat corrupti, doloribus ad provident, corporis quam veritatis mollitia odio consequatur sed voluptas. Amet?</p>
        </footer>
    </body>
</html>