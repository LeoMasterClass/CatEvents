<?php

namespace Projet\models;

class ConnexionManager extends Manager
{
    public function postConnexion($email,$password)
    {
        $bdd = $this->dbConnect();
        $login = $bdd ->prepare('SELECT id, password FROM users WHERE email = ?');
        $login->execute([$email]);
        $login = $login ->fetch();

    }
}