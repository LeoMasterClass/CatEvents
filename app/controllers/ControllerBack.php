<?php

namespace Projet\controllers;

class ControllerBack
{

    function adminBack()
    {


        require 'app/views/back/admin.php';
    }
    

    function loginAdmin(){

        require 'app/views/back/loginAdmin.php';
    }

}




// $register = $bdd->prepare('INSERT INTO user(pseudo, email, password) VALUES (:pseudo, :email, :password)');
// $register->execute([
//     "pseudo" => htmlentities($pseudo),
//     "email" => htmlentities($email),
//     "password" => password_hash($password, PASSWORD_DEFAULT)
// ]);