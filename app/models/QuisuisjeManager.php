<?php

namespace Projet\models;

class QuisuisjeManager extends Manager
{
    public function imagesFront()
    {
        $bdd= $this->dbConnect();
        $req= $bdd->prepare('SELECT id, img, alt FROM images WHERE id = 1');
        $req->execute(array());
        $req = $req->fetch();
        return $req;

    }

    
}