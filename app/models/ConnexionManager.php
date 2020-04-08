<?php

namespace Projet\models;

class ConnexionManager extends Manager
{
    // verifie les identifiants
    public function postConnexion($email,$password)
    {

        $bdd = $this->dbConnect();
        $req = $bdd ->prepare('SELECT id, email, password FROM users WHERE email = ?');
        $req->execute(array($email));
        var_dump($email);
        var_dump($password);
        return $req;

    }
}