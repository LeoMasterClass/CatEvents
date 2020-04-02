<?php

namespace Projet\models;

class HomeManager extends Manager
{
    // affiches les articles
    public function articlesFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT id, title, extract, image FROM articles ORDER BY id DESC LIMIT 4');
        $req->execute([$id]);
        return $req;
    }
    // affiches les articles a vendres
    public function articlesventesFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT id, image, title FROM articles_ventes ORDER BY id DESC LIMIT 3');
        $req->execute(array());
        return $req;
    }
    
}