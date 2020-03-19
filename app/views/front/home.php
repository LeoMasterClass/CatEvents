<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
?>

<main class="container">
    <!-- partie slider -->
    <section class="slider">
        <img src="app/public/img/image/banniere_direction_le_cirque.jpg" alt="">
        <div class="hover"><a href="">La suite</a></div>
    </section>
    <!-- partie article en vente -->
    <section class="article">
    <?php while($articlevente = $articlesventes->fetch()) : ?> 
        <article class="articlevente"><img src="<?= $articlevente['image'] ?>" alt=""><a href="" class="lienarticle" class="font-balloo-chettan"><?= $articlevente['title'] ?></a></article>
        <?php endwhile ?>
    </section>
    <!-- partie article -->

    <div class="part2">




    <section class="articlesI">
    <?php
    while($article = $articles->fetch()) : ?> 
        <article class="article-i">
            <img src="<?= $article['image'] ?>" alt="">
            <h2 class="font-balloo-chettan"><?= $article['title'] ?></h2>
            <p class="font-balloo-chettan"><?= $article['extract'] ?></p>
            <a href="" class="font-balloo-chettan">Lire la suite</a>
        </article>
    <?php endwhile ?>
    </section>






    <aside class="asideI"><h2>Instagram</h2></aside>
    </div>
    <!-- fin -->
</main>

<?php
include_once 'app/views/front/layouts/footer.php'
?>