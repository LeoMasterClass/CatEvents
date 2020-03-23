<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
?>


<main class="container">
    <div class="part2">
    <section class="diy">
    <h1 class="titre-diy font-titre">Do It Yourself</h1>
    <div class="diy">
    <?php while($article = $diy->fetch()) : ?>
    <article>

        <img src="<?= $article['image_pres'] ?>" alt="">
        <div class="hoverDIY">
            <a href=""><h2 class="font-texte"><?= $article['title'] ?></h2></a>
        </div>

    </article>
    <?php endwhile ?>
    </div>
    </section>
    <aside class="asideI"><h2>Instagram</h2></aside>
    </div>
</main>


<?php
include_once 'app/views/front/layouts/footer.php'
?>