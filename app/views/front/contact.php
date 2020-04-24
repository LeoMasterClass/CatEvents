<?php
include_once "app/views/front/layouts/head.php";
include_once "app/views/front/layouts/header.php";
include_once 'app/controllers/ControllerFront.php';
if(!empty($_POST)){
    $errors = $contact;
}
?>

<main class="container">

    <div class="part2">

    <section class="contact">

    <form method="post" action="">
    
        <?php
            if(isset($errors)) :
            if($errors) :
            foreach($errors as $error) : 
        ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message-erreur"><?= $error ?></div>
                </div>
            </div>
            <?php
            endforeach;
            else :
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="message-confirmation">Votre message a bien était envoyé !</div>
                </div>
            </div>
            <?php
            endif;
            endif
            ?>
            <div class="">
                <div class="input-contact">
                <label for="nom" class="font-texte">Votre Nom(obligatoire)</label>
                    <input type="text" name="nom" placeholder="" value="<?php if(isset($_POST['nom']))echo $_POST['nom'] ?>">
                </div>
                <div class="input-contact">
                <label for="nom" class="font-texte">Votre Email(obligatoire)</label>
                    <input type="text" name="email" placeholder="" value="<?php if(isset($_POST['email']))echo $_POST['email'] ?>">
                </div>
                <div class="input-contact">
                <label for="nom" class="font-texte">Objet</label>
                    <input type="text" name="objet" placeholder="" value="<?php if(isset($_POST['objet']))echo $_POST['objet'] ?>">
                </div>
                <div class="input-contact">
                <label for="nom" class="font-texte">Votre message</label>
                    <textarea name="texte" cols="40" rows="10" placeholder=""<?php if(isset($_POST['texte']))echo $_POST['texte'] ?>></textarea>
                </div>
            </div>

            <div class="">
                <input class="envoie-contact font-balloo" type="submit" value="Envoyer">
            </div>

        </form>

        </section>
        <?php include_once 'app/views/front/layouts/aside.php' ?>

    </div>

</main>


<?php
include_once 'app/views/front/layouts/footer.php'
?>