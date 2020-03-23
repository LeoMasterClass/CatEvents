<?php

namespace Projet\controllers;

class ControllerBack
{

    function adminBack()
    {


        require 'app/views/back/administration.php';
    }
    function connexionBack()
    {
        function connexion(){
            extract ($_POST);

            $error = 'Ces identifiants ne correspondent pas !'; 

            $connexionManager = new \Projet\Models\ConnexionManager();
            $connexion = $connexionManager->postConnexion($email,$password);


            if(password_verify($password, $connexion['password'])){
                $_SESSION['user'] = $connexion['id'];
                header('Location: app/views/back/compte.php');

            }else{
                return $error;
            }
            var_dump($connexion);
        }
        $connexion = connexion();

        require 'app/views/back/connexion.php';
    }
    function inscriptionBack()
    {
        function register(){

            extract ($_POST);

            $validation = true;
            
            $errors = [];

            // $firstName = $_POST['firstName'];
            // $name = $_POST['name'];
            // $email = $_POST['email'];
            // $emailverif = $_POST['emailverif'];
            // $password = $_POST['password'];
            // $passwordverif = $_POST['passwordverif'];

            
        
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
                $password = $_POST['password'];

 
                $inscriptionManager = new \Projet\Models\InscriptionManager();
                $inscriptionManager->postRegister($firstName,$name,$email,$password);

                
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

        require 'app/views/back/inscription.php';
    }
    function compteBack(){

    }

}




// $register = $bdd->prepare('INSERT INTO user(pseudo, email, password) VALUES (:pseudo, :email, :password)');
// $register->execute([
//     "pseudo" => htmlentities($pseudo),
//     "email" => htmlentities($email),
//     "password" => password_hash($password, PASSWORD_DEFAULT)
// ]);