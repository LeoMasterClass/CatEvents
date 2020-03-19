<?php

namespace Projet\models;

class HomeManager extends Manager
{
    public function articlesFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 4');
        $req->execute(array());
        return $req;
    }
    public function articlesventesFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT * FROM articles_ventes ORDER BY id DESC LIMIT 3');
        $req->execute(array());
        return $req;
    }
    
}