<?php

namespace Projet\models;

class InspirationManager extends Manager
{
    public function PostInspiFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT id, image FROM inspirations ORDER BY id DESC LIMIT 10');
        $req->execute(array());
        return $req;
    }
}