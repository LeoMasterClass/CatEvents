<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
$controllerBack = new \Projet\controllers\ControllerBack();
if(isset($_GET['action'])){
    if($_GET['action'] == 'connexion'){
        $controllerFront->connexionBack();
    }else if($_GET['action'] == 'inscription'){
        $controllerFront->inscriptionBack();
    }
}else{
    $controllerFront->adminBack();
}

}catch(Exception $e){
    
}
