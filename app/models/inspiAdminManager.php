<?php

namespace Projet\models;

class inspiAdminManager extends Manager
{
// gere les infos rentrer par l'utilisateur
    public function showInspiManage(){
        $bdd = $this->dbConnect();
        $inspi = $bdd->prepare("SELECT id, desc, alt FROM inspirations ORDER BY id ASC");
        $inspi->execute(array());
        return $inspi;
    }
    public function createInspiManage($img, $image, $desc, $alt)
    {
        $bdd = $this->dbConnect();
        $createArticleManage = $bdd->prepare("INSERT INTO inspirations (image, desc, alt) VALUES (?, ?, ?)");
        $createArticleManage->execute(array($img, $image, $desc, $alt));
        return $createArticleManage;
    }
    public function deleteInspiManage($id){
        $bdd = $this->dbConnect();
        $deleteContactManage = $bdd->prepare("DELETE FROM inspirations WHERE id = ?");
        $deleteContactManage->execute(array($id));
        $deleteContactManage->fetch();
        return $deleteContactManage;
    }
}