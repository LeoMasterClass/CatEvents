<?php

namespace Projet\models;

class ContactManager extends Manager
{
// envoie les informations rentrer dans le contact en base de donnée
    public function postContact($name,$email,$objet,$content)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("INSERT INTO post_contact ( name, email, objet, content) VALUES ( ?, ?, ?, ?)");
        $req->execute(array($name,$email,$objet,$content));
        return $req; 
    }

}

// public function addMail($lastname, $firstname, $mail, $content)
//     {
//         $bdd = $this->dbConnect();
//         $req = $bdd->prepare('INSERT INTO contact( dates, lastname, firstname,  mail, content ) VALUE(NOW(), ?, ?, ?, ?)');
//         $req->execute(array($lastname, $firstname, $mail, $content));
//         return $req;
//     }



    // $name = isset($_POST['name']);
    // $email = isset($_POST['email']);
    // $objet = isset($_POST['objet']);
    // $content = isset($_POST['content']);

