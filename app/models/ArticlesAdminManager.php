<?php

namespace Projet\models;

class ArticlesAdminManager extends Manager
{
    //Va permettre de voir tout les articles de la table articles
    public function showArticleManage(){
        $bdd = $this->dbConnect();
        $showArticleManage = $bdd->prepare("SELECT id, title, extract, content, image, created_at FROM articles ORDER BY id ASC");
        $showArticleManage->execute(array());
        return $showArticleManage;
    }
    // Va permettre la modification des articles de la table articles
    public function updateArticleManage(){
        $bdd = $this->dbConnect();
        $updateArticleManage = $bdd->prepare("UPDATE articles SET title, title_desc, extract, content, image WHERE id = ?");
        $updateArticleManage->execute(array());
        return $updateArticleManage;
    }
    // Va permettre de créer des articles dans table articles
    public function createArticleManage($title, $title_desc, $extract, $content, $image, $alt){
        $bdd = $this->dbConnect();
        $createArticleManage = $bdd->prepare("INSERT INTO articles (title, title_desc, extract, content, image) VALUES (?, ?, ?, ?, ?, ?)");
        $createArticleManage->execute(array($title, $title_desc, $extract, $content, $image, $alt));
        return $createArticleManage;
    }
    // Va permettre de supprimer des articles de la table articles
    public function deleteArticleManage(){
        $bdd = $this->dbConnect();
        $deleteArticleManage = $bdd->prepare("DELETE * FROM articles WHERE id = ?");
        $deleteArticleManage->execute(array());
        return $deleteArticleManage;
    }

}