<?php
    include_once "app/views/back/layouts/head.php";
    include_once "app/views/back/layouts/header.php";
?>

<main class="container">

    <section>
    <h1 class="font-titre">Connexion</h1>

<form method="post" action="">

<?php
if (isset($error)) :
?>

        <div class="">
            <div class="message-erreur">Vos identifiants sont mauvais</div>
        </div>

<?php
endif
?>

        <div class="input-connexion">
            <label for="email" class="font-titre">Adresse mail</label>
            <input type="text" name="email" placeholder="" value="<?php if (isset($_POST['email'])) {
    echo $_POST['email'];
} ?>">

            <label for="password" class="font-titre">Mot de passe</label>
            <input type="password" name="password" placeholder="" value="<?php if (isset($_POST['password'])) {
    echo $_POST['password'];
} ?>"> 
        </div>

        <div class="envoieco">
            <input class="font-titre" type="submit" value="Se connecter">
        </div>


</form>

    </section>

</main>

<?php
    include_once "app/views/back/layouts/head.php";
?>