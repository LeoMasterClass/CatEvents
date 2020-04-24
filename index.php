<?php

session_start();


require_once __DIR__ . '/vendor/autoload.php';

try {
$controllerFront = new \Projet\controllers\ControllerFront();
if(isset($_GET['action'])){
    // amene a la page lié a l'action demander
    if($_GET['action'] == 'contact'){
        $controllerFront->contactFront();
    }else if($_GET['action'] == 'concept'){
        $controllerFront->conceptFront();
    }else if($_GET['action'] == 'quisuisje'){
        $controllerFront->quisuisjeFront();
    }else if($_GET['action'] == 'inspiration'){
        $controllerFront->inspirationFront();
    }else if($_GET['action'] == 'boutique'){
        $controllerFront->boutiqueFront();
    }else if($_GET['action'] == 'diy'){
        $controllerFront->diyFront();
    }else if($_GET['action'] == 'connexion'){
        $controllerFront->connexionFront();
    }else if($_GET['action'] == 'inscription'){
        $controllerFront->inscriptionFront();
    }else if($_GET['action'] == 'compte'){
        $controllerFront->compteFront();
    }else if($_GET['action'] == 'article'){
        $controllerFront->articlesFront();
    }
}else{
    // Par défaut amene sur la page home.php
    $controllerFront->home();
}

}catch(Exception $e){
    
}
