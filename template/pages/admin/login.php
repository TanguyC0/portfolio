<?php 
    $title = "connexion"; 
    $specificCSS = '<link rel="stylesheet" href="./style/mono.css">';
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>

<section class="mono">
    <article>
        <div>
            <h1>s'inscrire</h1>
            <form action="" method="post">
                <label for="name">nom <mark>*</mark></label> <input type="text" name="name" id="name" required><br>
                <label for="email">email <mark>*</mark></label> <input type="email" name="email" id="email" required><br>
                <label for="password">password <mark>*</mark></label> <input type="password" name="password" id="password"><br>

                <button type="submit" name="submitLogon">valider</button>
            </form>
        <div>
    </article>
</section>
<section class="mono">
    <article>
        <div>
            <h1>se connecter</h1>
            <form action="" method="post">
                <label for="email">email <mark>*</mark></label> <input type="email" name="email" id="email" required><br>
                <label for="password">password <mark>*</mark></label> <input type="password" name="password" id="password"><br>

                <button type="submit" name="submitLogin">valider</button>
            </form>
        <div>
    </article>
</section>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>