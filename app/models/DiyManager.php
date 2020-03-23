<?php

namespace Projet\models;

class DiyManager extends Manager
{
    public function diy(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT title, image_pres FROM articles ORDER BY id DESC LIMIT 4");
        $req->execute(array());
        return $req;
    }


}