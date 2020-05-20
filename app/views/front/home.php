<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
?>

<main class="container">
    <!-- partie slider -->
    <!-- taille image slider 1080x525 -->
    <div class="slider">
        <ul>
        <?php while($lien = $liens->fetch()) : ?>
            <li><img src="app\public\img\DIY\1_DIY-Sac_Lapin\Banniere-Sac_Lapin_texte.jpg" alt="" width="1080"
                    height="525">
                <div class="bloc_lien">
                    <a href="index.php?action=article&id=<?= $lien['id'] ?>" class="lien_slider">Lire la suite</a>
                </div>
            </li>

            <li><img src="app\public\img\DIY\2_DIY-Un_bouquet_pour_maman\Bannière_-_Un_bouquet_pour_maman_avec_texte.jpg"
                    alt="" width="1080" height="525">
                <div class="bloc_lien">
                    <a href="index.php?action=article&id=<?= $lien['id'] ?>" class="lien_slider">Lire la suite</a>
                </div>
            </li>

            <li><img src="app\public\img\DIY\3_DIY-Les_citrouilles_de_papier\Banniere-Les_citrouilles_de_papier_avec_texte.jpg"
                    alt="" width="1080" height="525">
                <div class="bloc_lien">
                    <a href="index.php?action=article&id=<?= $lien['id'] ?>" class="lien_slider">Lire la suite</a>
                </div>
            </li>

            <li><img src="app\public\img\DIY\4_DIY-Une_cage_illuminée_pour_Mamie\Banniere-Une_cage_pour_mamie_avec_texte.jpg"
                    alt="" width="1080" height="525">
                <div class="bloc_lien">
                    <a href="index.php?action=article&id=<?= $lien['id'] ?>" class="lien_slider">Lire la suite</a>
                </div>
            </li>
        <?php endwhile ?>
        </ul>
    </div>
    <!-- partie article en vente -->
    <section class="article">
        <?php while ($articlevente = $articlesventes->fetch()) : ?>
        <article class="articlevente"><img src="<?= $articlevente['image'] ?>" alt="<?= $articlevente['alt'] ?>"><a
                href="" class="lienarticle font-texte" class="font-balloo-chettan"><?= $articlevente['title'] ?></a>
        </article>
        <?php endwhile ?>
    </section>
    <!-- partie article -->

    <div class="part2">




        <section class="articlesI">
            <?php while ($article = $articles->fetch()) : ?>
            <article class="article-i">
                <img src="<?= $article['image'] ?>" alt="<?= $article['alt'] ?>">
                <h2 class="font-texte"><?= $article['title'] ?></h2>
                <p class="font-texte"><?= $article['extract'] ?></p>
                <a href="index.php?action=article&id=<?= $article['id'] ?>" class="font-texte">Lire la suite</a>
            </article>
            <?php endwhile ?>
        </section>






        <?php include_once 'app/views/front/layouts/aside.php' ?>
    </div>
    <!-- fin -->
</main>

<?php
include_once 'app/views/front/layouts/footer.php'
?>