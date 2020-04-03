<?php
include_once "app/views/front/layouts/head.php";
include_once "app/views/front/layouts/header.php";

?>
    <?php while($article = $articles->fetch()) : ?>

    <h1><?= $article['id'] ?></h1>
    <img src="<?= $article['image'] ?>" alt="">
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['content'] ?></p>
    <?php endwhile ?>


<?php
include_once "app/views/front/layouts/footer.php"
?>