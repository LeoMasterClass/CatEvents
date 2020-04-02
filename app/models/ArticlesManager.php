<?php

namespace Projet\models;

class ArticlesManager extends Manager
{
// gere la séléction des articles par l'id
    public function article(){
        $bdd = $this->dbConnect();
        $article = $bdd->prepare("SELECT id, title, content, image, created_at FROM articles WHERE id = ?")
        $article->execute([$id]);
        return $article;
    }

}