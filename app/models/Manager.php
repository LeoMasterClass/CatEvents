<?php

namespace Projet\models;

class Manager
{
    protected function dbConnect(){
    try{
        $bdd = new \PDO('mysql:host=localhost;dbname=catevents;charset=utf8', 'root', '');
        return $bdd;
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    }
}