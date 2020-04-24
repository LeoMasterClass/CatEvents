<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
$controllerBack = new \Projet\controllers\ControllerBack();
if(isset($_GET['action'])){
    if($_GET['action'] == 'admin'){
        $controllerBack->adminBack();
    }else if($_GET['action'] == 'articlesAdmin'){
        $controllerBack->articlesAdmin();
    }else if($_GET['action'] == 'articlesCreate'){
        $controllerBack->articleCreate();
    }else if($_GET['action'] == 'gestionMembre'){
        $controllerBack->gestionMembre();
    }
}else{
    $controllerBack->adminBack();
}

}catch(Exception $e){
    
} 
