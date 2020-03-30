<?php

namespace Projet\models;

class ConnexionManager extends Manager
{
    // verifie les identifiants
    public function postConnexion($email,$password)
    {
        $bdd = $this->dbConnect();
        $login = $bdd ->prepare('SELECT id, password FROM users WHERE email = :email');
        $login->execute(array(
            'email' => $email
        ));
        $connexion = $login ->fetch();
        var_dump($connexion);
    }
}