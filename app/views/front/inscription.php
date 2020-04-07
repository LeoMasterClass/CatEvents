<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
    if(!empty($_POST)){
        $errors = $inscription;
    }
?>

<main class="container">

<section class="inscription">
    <h1>Inscription</h1>

        <form method="post" action="">

        <?php 
        if(isset($errors)):
              if($errors) :  
                foreach($errors as $error) :
            ?>

                    <div class="message-erreur"><?= $error ?></div>

            <?php 
            endforeach;
            else :
            
            ?>

                    <div class="message-confirmation">Votre inscription est validé </div>

        <?php 
        endif; 
        endif
        
              
        ?>

            <div class="input-inscription">
                    <label for="firstName" class="font-titre">Nom</label>
                    <input type="text" name="firstName" placeholder="" value="<?php if(isset($_POST['firstName']))echo $_POST['firstName'] ?>">

                    <label for="name" class="font-titre">Prénom</label>
                    <input type="text" name="name" placeholder="" value="<?php if(isset($_POST['name']))echo $_POST['name'] ?>">

                    <label for="email" class="font-titre">Adresse mail</label>
                    <input type="text" name="email" placeholder="" value="<?php if(isset($_POST['email']))echo $_POST['email'] ?>">

                    <label for="emailverif" class="font-titre">Confirmer l'adresse mail</label>
                    <input type="text" name="emailverif" placeholder="" value="<?php if(isset($_POST['emailverif']))echo $_POST['emailverif'] ?>">

                    <label for="password" class="font-titre">Mot de passe</label>
                    <input type="password" name="passwordR" placeholder="" value="<?php if(isset($_POST['passwordR']))echo $_POST['passwordR'] ?>">

                    <label for="passwordverif" class="font-titre">Confirmer le mot de passe</label>
                    <input type="password" name="passwordverif" placeholder="" value="<?php if(isset($_POST['passwordverif']))echo $_POST['passwordverif'] ?>">

                    <div class="checkbox">
                        <div>
                            <input type="checkbox">
                            <label for="">Je m'abonne a la newsletter</label>
                        </div>
                        <div>
                            <input type="checkbox">
                            <label for="">J'accepte les <a href="">CGV</a></label>
                        </div>
                    </div>
            </div>

                <div class="envoieinscri">
                    <input class="font-titre" type="submit" value="Je m'inscris">
                </div>

    </form>
</section>
</main>

<?php
include_once 'app/views/front/layouts/footer.php'
?>