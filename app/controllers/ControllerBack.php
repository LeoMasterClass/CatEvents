<?php

namespace Projet\controllers;

class ControllerBack
{

    function adminBack()
    {
        

        require 'app/views/back/admin.php';
    }
    

    function loginAdmin(){

        function connexionAdmin(){
            extract ($_POST);

            $errors = []; 
            
            $email = $_POST['email'];
            $password = $_POST['password'];


            $connexionManager = new \Projet\Models\ConnexionAdminManager();
            $connexion = $connexionManager->adminConnexion($email,$password,$admin);
            $resultat = $connexion->fetch();

            $isPasswordCorrect = password_verify($password, $resultat['password']);


            if ($isPasswordCorrect) {
                $_SESSION['email'] = $resultat['email']; // transformation des variables recupérées en session
                $_SESSION['password'] = $resultat['password'];
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['admin'] = $resultat['admin'];
                if ($_SESSION['admin'] == 1) {
                    header('Location: indexBack.php?action=admin');
                }else{
                    header('Location: /');
                }
            } else {
                 return $errors;
            }
        }
        $connexion = connexionAdmin();

        require 'app/views/back/loginAdmin.php';
    }



//**
// 
//          GESTION DE LA PARTIE ARTICLES
// 
//**



    function articlesAdmin(){
        // Va permettre de voir tout les articles de la table articles
        function showArticle(){
            $showArticleManage= new \Projet\Models\ArticlesAdminManager();
            $showTables = $showArticleManage->showArticleManage();

            return $showTables;
        }
        $showTables = showArticle();
        // Va permettre la modification des articles de la table articles
        function updateArticle(){

        }
        // Va permettre de supprimer des articles de la table articles
        function deleteArticle(){
            if($showtable == true){
                $deleteArticleManage= new \Projet\Models\ArticlesAdminManager();
                $deleteArticleManage->deleteArticleManage();
            }
        }

        require 'app/views/back/articlesAdmin.php';
    }
    function articleCreate(){
        // Va permettre de créer des articles dans table articles
        function articleCreate(){
            extract($_POST);
        
            $validation = true;
        
            $errors = [];
    

        
            if(empty($title) || empty($title_desc) || empty($extract) || empty($content) || empty($alt)){
                $validation =false;
                $errors[] = "Tout les champs son obligatoire !!!!";
            }

            else if(empty($title)){
                $validation = false;
        
                $errors[] = "Il manque le titre a votre article";
            }

            else if(empty($title_desc)){
                $validation = false;
        
                $errors[] = "Il manque le titre de description a votre article";
            }

            else if(empty($extract)){
                $validation = false;
        
                $errors[] = "Il manque le texte de description a votre article";
            }

            else if(empty($content)){
                $validation = false;
        
                $errors[] = "Il manque le texte de votre article";
            }

            else if(empty($alt)){
                $validation = false;
        
                $errors[] = "Il manque le titre de référencement";
            }

            else if(isset($_FILES['file']) || $_FILES['file']['error'] > 0 ){
                $validation = false;
                $errors[] = "Il manque les images";
            }

            else if($validation){
                $image = basename($_FILES["file"]["name"]);
                move_uploaded_file($_FILES["file"]["tmp_name"],'app/img/image/'.$image);
                
                var_dump($title);
                var_dump($title_desc);
                var_dump($extract);
                var_dump($content);
                var_dump($_FILES);
                var_dump($alt);
                $contactManager = new \Projet\Models\ArticlesAdminManager();
                $contactManager->createArticleManage($title, $title_desc, $extract, $content, $image ,$alt);

    
            }

            return $errors;
        }
        $createArticle = articleCreate();
        require 'app/views/back/articleCreate.php';
    }



//**
// 
//          GESTION DE LA PARTIE MEMBRES
// 
//**



    function gestionMembre(){
         // Va permettre de voir tout les membres de la table users
        function showUsers(){
            $showMembreManage= new \Projet\Models\membresAdminManager();
            $showUsers = $showMembreManage->showMembreManage();
            var_dump($showUsers);

            return $showUsers;
        }
        $showUsers = showUsers();

        // Va permettre de créer des créers des membres dans la table users
        function createUsers(){
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
    
    
     
                    $inscriptionManager = new \Projet\Models\membresAdminManager();
                    $inscriptionManager->createMembreManage($firstName,$name,$email,$password);
    
                    
                    unset($_POST['firstName']);
                    unset($_POST['name']);
                    unset($_POST['email']);
                    unset($_POST['emailverif']);
                    unset($_POST['password']);
                    unset($_POST['passwordverif']);
    
                    header('Location: indexBack.php?action=gestionMembre');
               
            }
            return $errors;

        }
        $inscription = createUsers();
  
        require 'app/views/back/gestionMembre.php';
        
    }

    function upgradeUsers($id){

        $CrochetManager = new \Projet\Models\membresAdminManager;
        $updateUser = $CrochetManager->upgradeMembreManage($id);

        header('Location: indexBack.php?action=gestionMembre');

        require 'app/views/back/gestionMembre.php';
    
    }

    function reduceUsers($id){

        $CrochetManager = new \Projet\Models\membresAdminManager;
        $updateUser = $CrochetManager->reduceMembreManage($id);

        header('Location: indexBack.php?action=gestionMembre');

        require 'app/views/back/gestionMembre.php';
    
    }

    function deleteUsers($id){

        $CrochetManager = new \Projet\Models\membresAdminManager;
        $deleteUser = $CrochetManager->deleteMembreManage($id);

        header('Location: indexBack.php?action=gestionMembre');

        require 'app/views/back/gestionMembre.php';
    
    }



//**
// 
//          GESTION DE LA PARTIE CONTACT
// 
//**



//  Function d'affichage des messages reçu
    function showContact()
    {
        $showContactManage= new \Projet\Models\contactAdminManager();
        $showContacts = $showContactManage->showContactManage();

        require 'app/views/back/showContact.php';
    }




//**
// 
//          GESTION DE L'ACCES AU PANEL
// 
//**



    function decoAdmin(){
        session_destroy();
        header('Location: /');

        require 'app/views/back/decoAdmin.php';
    }
}