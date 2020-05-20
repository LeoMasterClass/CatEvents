<?php

namespace Projet\models;

class contactAdminManager extends Manager
{
// gere les infos rentrer par l'utilisateur
    public function showContactManage(){
        $bdd = $this->dbConnect();
        $contact = $bdd->prepare("SELECT * FROM post_contact ORDER BY id ASC");
        $contact->execute(array());
        return $contact;
    }
}