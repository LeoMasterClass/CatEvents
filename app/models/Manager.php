<?php

namespace Projet\Models;

class Manager
{
    // connexion a la base de donnée 
    protected function dbConnect(){
    try{
        // $bdd = new \PDO('mysql:host=localhost;dbname=gretaxao_leolorin;charset=utf8', 'gretaxao_leolorin', 'LeoLorin2020');
        $bdd = new \PDO('mysql:host=localhost;dbname=catevents;charset=utf8', 'root', '');
        return $bdd;
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    }
}