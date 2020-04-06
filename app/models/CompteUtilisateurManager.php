<?php

namespace Projet\models;

class CompteUtilisateurManager extends Manager
{
// gere les infos rentrer par l'utilisateur
    function infosUser(){
        $bdd = $this->dbConnect();
        $compte = $bdd->prepare("SELECT * FROM users WHERE id = ?");
        $compte->execute(array($id));
        return $compte;
    }
}