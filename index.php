<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
$controllerFront = new \Projet\controllers\ControllerFront();

if(isset($_GET['action'])){
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
    }
}else{
    $controllerFront->home();
}

}catch(Exception $e){

}

try {
    $controllerFront = new \Projet\controllers\ControllerBack();
    
    if(isset($_GET['action'])){
        if($_GET['action'] == 'admin'){
            $controllerFront->adminBack();
        }
    }else{
        $controllerFront->home();
    }
    
    }catch(Exception $e){
    
    }