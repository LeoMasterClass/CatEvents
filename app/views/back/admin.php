<?php 
    include_once "app/Views/back/layouts/head.php";
    include_once "app/Views/back/layouts/header.php";
?>

<main class="container">


<section class="dashboard">

    <div class="bloc-dashboard">

        <h2 class="font-titre">Gestion des articles...</h2>

        <ul>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=articlesAdmin">-Panel articles</a></li>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=articlesCreate">-Créer un article</a></li>
        </ul>

    </div>

    <div class="bloc-dashboard">

        <h2 class="font-titre">Gestion des messages contact...</h2>

        <ul>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=showContact">-Panel message de contact</a></li>

        </ul>

    </div>

    <div class="bloc-dashboard">

        <h2 class="font-titre">Gestions des images d'inspiration...</h2>

        <ul>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=showInspi">-Panel inspirations</a></li>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=createInspi">-Ajouter une inspiration</a></li>
        </ul>

    </div>

    <div class="bloc-dashboard">

        <h2 class="font-titre">Gestions des membres utilisateurs...</h2>

        <ul>
            <li class="font-text"><a class="showfleche" href="indexBack.php?action=gestionMembre">-Panel utilisateur</a></li>
        </ul>

    </div>
    
</section>


</main>

<?php
    include_once "app/Views/back/layouts/head.php";
?>