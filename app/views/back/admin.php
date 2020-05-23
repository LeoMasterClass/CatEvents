<?php 
    include_once "app/views/back/layouts/head.php";
    include_once "app/views/back/layouts/header.php";
?>

<main class="container">


<section class="modifs">

    <div class="gestion font" id="gestion1">

        <h2 class="font">Gestion des articles...   <i class="fas fa-angle-down"></i></h2>

    </div>

    <div class="drop" id="drop1">

        <ul>
            <li class="font"><a class="showfleche" href="indexBack.php?action=articlesAdmin"><i class="fleche fas fa-angle-right"></i>   Panel articles</a></li>
            <li class="font"><a class="showfleche" href="indexBack.php?action=articlesCreate"><i class="fleche fas fa-angle-right"></i>   Créer un article</a></li>
        </ul>

    </div>

    <div class="gestion" id="gestion2">

        <h2 class="font">Gestion des messages contact...   <i class=" fas fa-angle-down"></i></h2>

    </div>

    <div class="drop" id="drop2">

        <ul>
            <li class="font"><a class="showfleche" href="indexBack.php?action=showContact"><i class="fleche fas fa-angle-right"></i>   Panel message de contact</a></li>

        </ul>

    </div>

    <div class="gestion" id="gestion3">

        <h2 class="font">Gestions des images d'inspiration...   <i class=" fas fa-angle-down"></i></h2>



    </div>

    <div class="drop" id="drop3">

        <ul>
            <li class="font"><a class="showfleche" href="indexBack.php?action=showInspi"><i class="fleche fas fa-angle-right"></i>   Panel inspirations</a></li>
            <li class="font"><a class="showfleche" href="indexBack.php?action=createInspi"><i class="fleche fas fa-angle-right"></i>   Ajouter une inspirations</a></li>
        </ul>

    </div>

    <div class="gestion" id="gestion4">

        <h2 class="font">Gestions des membres utilisateurs...   <i class=" fas fa-angle-down"></i></h2>



    </div>

    <div class="drop" id="drop4">

        <ul>
            <li class="font"><a class="showfleche" href="indexBack.php?action=gestionMembre"><i class="fleche fas fa-angle-right"></i>   Panel utilisateur</a></li>
        </ul>

    </div>
    
</section>


</main>

<?php
    include_once "app/views/back/layouts/head.php";
?>