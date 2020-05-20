<?php

namespace Projet\controllers;

class ControllerFront
{

    function home()
    {
        $homeFront= new \Projet\Models\HomeManager();
        $articles = $homeFront->articlesFront();
        $articlesventes = $homeFront->articlesventesFront();
        $liens = $homeFront->lienSliderFront();

       
    
            $connexion = [];
            $inscription = [];
    
            if(empty($_SESSION['email'])){
                $connexion = "Connexion";
                $inscription = "Inscription";
            }
       

        require 'app/views/front/home.php';
    }

    function contactFront(){

        function contact(){
            extract($_POST);
        
            $validation = true;
        
            $errors = [];
    
        
            if(empty($nom) || empty($email) || empty($objet) || empty($texte)){
                $validation =false;
                $errors[] = "Tout les champs son obligatoire !!!!";
            }

            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $validation = false;
        
                $errors[] = "L'adresse email n'est pas valide";
            }
        

            else if($validation){
                $to = "leolorin9@gmail.com";
                $sujet = 'nouveau message de ' . $nom;
                $message = '
                <h1>Nouveau message de ' . $nom .'</h1>
                <h2>Adresse e-mail: ' . $email .'</h2>
                <p>' .nl2br($objet) .'</p>
                <p>' . nl2br($texte) . '</p>
                ';
                $headers = 'From' . $nom . ' <' . $email . '> ' . "\r\n";
                $headers = 'MIME-Versions: 1.0' . "\r\n";
                $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
        
                mail($to,$sujet,$message,$headers);
                
                $name = $_POST['nom'];
                $email = $_POST['email'];
                $objet = $_POST['objet'];
                $content = $_POST['texte'];

                $contactManager = new \Projet\Models\ContactManager();
                $contactManager->postContact($name,$email,$objet,$content);

    
            }

            return $errors;
        }

        $contact = contact();

        require 'app/views/front/contact.php';
    }

    function conceptFront(){

        require 'app/views/front/concept.php';
    }

    function quisuisjeFront(){
        $quisuisjeFront = new \Projet\Models\QuisuisjeManager();
        $images = $quisuisjeFront->imagesFront();

        require 'app/views/front/quisuisje.php';
    }

    function boutiqueFront(){
        require 'app/views/front/boutique.php';
    }

    function inspirationFront(){
        $inspirationFront = new \Projet\Models\InspirationManager();
        $postimages = $inspirationFront->PostInspiFront();

        require 'app/views/front/inspiration.php';
    }

    function diyFront(){
        $diyFront = new \Projet\Models\DiyManager();
        $diy = $diyFront->diy();

        require 'app/views/front/diy.php';
    }

    public function connexionFront(){
        function connexion(){
            extract ($_POST);

            $errors = []; 
            
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);


            $connexionManager = new \Projet\Models\ConnexionManager();
            $connexion = $connexionManager->postConnexion($email,$password);
            $resultat = $connexion->fetch();
            $isPasswordCorrect = password_verify($password, $resultat['password']);


            if ($isPasswordCorrect) {
                $_SESSION['email'] = $resultat['email']; // transformation des variables recupérées en session
                $_SESSION['password'] = $resultat['password'];
                $_SESSION['id'] = $resultat['id'];

                header('Location: index.php?action=compte');
            } else {
                 return $errors;
            }
        }
        $connexion = connexion();

        require 'app/views/front/connexion.php';
    }

    function inscriptionFront(){
        function register(){
            extract ($_POST);

            $validation = true;
            

            $errors = [];
            if(empty($firstName) || empty($name) || empty($email) || empty($emailverif) || empty($password) || empty($passwordverif)){
                $validation = false;
                $errors[] = "Tous les champs sont obligatoire !" ;
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $validation = false;
                $errors[] = "L'adresse email n'est pas valide !";
            }
            else if($emailverif != $email){
                $validation = false;
                $errors[] = "L'adresse email de confirmation n'est pas valide !";
            }
            else if($passwordverif != $password){
                $validation = false;
                $errors[] = "Le mot de passe de confirmation est incorrect !";
            }   

            // if(pseudo_check($pseudo)){
            //     $validation = false;
            //     $errors[] = 'Ce pseudo est déjà pris !';
            // };
            else if($validation){

                $firstName = $_POST['firstName'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $passwordR = $_POST['password'];


 
                $inscriptionManager = new \Projet\Models\InscriptionManager();
                $inscriptionManager->postRegister($firstName,$name,$email,$password);

                header('Location: index.php?action=connexion');
                
                // unset($_POST['firstName']);
                // unset($_POST['name']);
                // unset($_POST['email']);
                // unset($_POST['emailverif']);
                // unset($_POST['password']);
                // unset($_POST['passwordverif']);

            }
            return $errors;
        }
        $inscription = register();

        require 'app/views/front/inscription.php';
    }

    function compteFront(){

        function viewInfo(){
            $compte = new \Projet\Models\CompteUtilisateurManager();
            $infos = $compte->infosUser($_SESSION['email']);

            return $infos;
        }
        $compte = viewInfo();

        require 'app/views/front/compte.php';
    }

    function articlesFront(){


        function articles(){

            $id = $_GET['id'];
            $article = new \Projet\Models\ArticlesManager();
            $articles = $article->article($id);

            if(empty($articles)){
                header('Location: app/views/front/home.php');
            }else{
                return $articles;
            }
        }
        $articles = articles();

        require 'app/views/front/article.php';
    }

    function deconnexionFront()
    {
        session_destroy();
        header('Location: index.php?action=connexion');

        require 'app/views/front/deconnexion.php';
    }

}