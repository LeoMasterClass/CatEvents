<?php

namespace Projet\models;

class ArticlesManager extends Manager
{
// gere la séléction des articles par l'id
    public function article(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT id, title, content, image, created_at FROM articles WHERE id = ?")
        $req->execute([$id]);
        return $req;
    }

}