<?php
include_once "app/views/front/layouts/head.php";
include_once "app/views/front/layouts/header.php";
    if(!empty($_POST)){
        $error = $connexion;
    };
?>

<main class="container">
    <section class="connexion">
    <h1 class="font-titre">Connexion</h1>

        <form method="post" action="">

        <?php 
        if(isset($error)) :
        ?>

                <div class="">
                    <div class="message-erreur"><?= $error ?></div>
                </div>

        <?php 
        endif
        ?>

                <div class="input-connexion">
                    <label for="email" class="font-titre">Adresse mail</label>
                    <input type="text" name="email" placeholder="" value="<?php if(isset($_POST['email']))echo $_POST['email'] ?>">

                    <label for="password" class="font-titre">Mot de passe</label>
                    <input type="password" name="password" placeholder="">
                </div>

                <div class="envoieco">
                    <input class="font-titre" type="submit" value="Se connecter">
                </div>
                <?php var_dump($connexion) ?>

        </form>

</section>
</main>
<?php
include_once 'app/views/front/layouts/footer.php'
?>