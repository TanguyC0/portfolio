<?php 
    $title = "projet : xxx"; 
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
        <?php
            foreach($data as $project)
            {
        ?>
            <h1 class="duo">test</h1>
            <p class="duo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id animi repellendus eos nam nihil. Debitis delectus rem illo hic inventore. Explicabo quos doloribus nemo in soluta nobis nam quia! Adipisci?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni asperiores delectus omnis fugiat dolorem ratione deleniti voluptatum cupiditate consequuntur nisi esse labore, tempore ab provident, quos architecto quisquam! Voluptatum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur a explicabo doloribus adipisci laboriosam! Iure in harum, maiores temporibus, totam quod quidem dicta possimus corrupti eveniet delectus culpa voluptatum similique.
            </p>
            <h1 class="duo">test</h1>
            <p class="duo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id animi repellendus eos nam nihil. Debitis delectus rem illo hic inventore. Explicabo quos doloribus nemo in soluta nobis nam quia! Adipisci?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni asperiores delectus omnis fugiat dolorem ratione deleniti voluptatum cupiditate consequuntur nisi esse labore, tempore ab provident, quos architecto quisquam! Voluptatum.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur a explicabo doloribus adipisci laboriosam! Iure in harum, maiores temporibus, totam quod quidem dicta possimus corrupti eveniet delectus culpa voluptatum similique.
            </p>
        <?php
            }
        ?>
    </article>
        
</section>

<?php 
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>