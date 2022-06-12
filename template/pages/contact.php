<?php 
    $title = "contact"; 
    $specificCSS = '<link rel="stylesheet" href="./style/mono.css">';
?>

<?php 
    ob_start(); 
    include('./template/module/navigation.php');
?>

<section class="mono">
    <article>
        <div>
            <h1>Contact</h1>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fuga perferendis deleniti neque eum voluptatem ducimus reprehenderit fugit eius earum! Ea quam eveniet aut, sunt aliquam repellendus sapiente enim accusantium.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, sit, natus quas, quidem perspiciatis nobis dolor excepturi aliquid recusandae fuga doloribus perferendis! Quas error eos sit excepturi sapiente voluptatem saepe.
            lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus blanditiis delectus tenetur dolorem distinctio, amet ad sequi sapiente esse et reiciendis est fuga quam aperiam! Nostrum repellat laudantium obcaecati perferendis.
            lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur recusandae dicta voluptates numquam quia enim soluta voluptas. Exercitationem officia sint, repudiandae enim eveniet assumenda repellendus explicabo quos est, doloribus voluptas.
            lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
            lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
            lorem
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, libero. Nulla tempore iure distinctio, amet inventore laborum possimus perferendis vitae soluta asperiores adipisci corrupti. Consequatur ducimus quae voluptates deleniti maxime.

            </p>
        </div>
    </article>
</section>
<section class="mono">
    <article>
        <form action="" method="post">
            <input type="text"><input type="text"><input type="text"><input type="text">
        </form>
    </article>
</section>

<?php
    include('./template/module/footer.php');
    $content = ob_get_clean(); 
?>

<?php require('template/layout.php'); ?>