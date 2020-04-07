<?php

namespace Projet\models;

class CompteUtilisateurManager extends Manager
{
// gere les infos rentrer par l'utilisateur
    public function infosUser(){
        $bdd = $this->dbConnect();
        $compte = $bdd->prepare("SELECT * FROM users WHERE id = '".$_SESSION['id']."'");
        $compte->execute(array());
        var_dump($compte);
        return $compte;
    }
}