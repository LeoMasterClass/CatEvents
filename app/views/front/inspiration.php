<?php
include_once "app/views/front/layouts/head.php";
include_once "app/views/front/layouts/header.php"
?>


<main class="container">
    <div class="part2">
    <section class="inspiration">  
        <h2 class="font-balloo-chettan">Inspirations</h2>
        <article>
            <?php while($postimage = $postimages->fetch()) : ?>

            <img src="<?= $postimage['image'] ?>" alt="">

            <?php endwhile ?>
        </article>
    </section>
    <aside class="asideI"><h2>Instagram</h2></aside>
    </div>
</main>


<?php
include_once 'app/views/front/layouts/footer.php'
?>