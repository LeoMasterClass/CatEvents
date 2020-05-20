<!-- Header -->
<header class="header">
    <!-- Barre de connexion pour le compte utilisateur -->
        <div class="barre-connexion">
            <ul>

                <?php if(isset($_SESSION['email'])) : ?>
                <li><a href="index.php?action=compte" class="font-balloo-chettan">Mon compte</a></li>
                <li><a href="index.php?action=deconnexion" class="font-balloo-chettan">Deconnexion</a></li>
                <?php else : ?>
                <li><a href="index.php?action=inscription" class="font-balloo-chettan">Inscription</a></li>
                <li><a href="index.php?action=connexion" class="font-balloo-chettan">Connexion</a></li>
                <?php endif ?>
            </ul>
        </div>

    <!-- Logo du site -->
        <a class="bandeau-header" href="/"><img src="app/public/img/image/Bandeaulogo.png" alt="Logo CatEvents"></a>

    <!-- barre de navigation du site -->
        <nav class="barre-navigation">
            <ul>
                <a href="/" class="font-nav"><li>Accueil</li></a>
                <a href="index.php?action=concept" class="font-nav"><li>Le concept</li></a>
                <a href="index.php?action=quisuisje" class="font-nav"><li>Qui suis-je ?</li></a>
                <a href="index.php?action=diy" class="font-nav"><li>DIY</li></a>
                <a href="index.php?action=inspiration" class="font-nav"><li>Inspirations</li></a>
                <a href="index.php?action=boutique" class="font-nav"><li>La boutique</li></a>
                <a href="index.php?action=contact" class="font-nav"><li>Me contacter</li></a>
            </ul>
        </nav>


    </header>