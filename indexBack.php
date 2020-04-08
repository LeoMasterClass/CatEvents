<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
$controllerBack = new \Projet\controllers\ControllerBack();
if(isset($_GET['action'])){
    if($_GET['action'] == 'admin'){
        $controllerBack->adminBack();
    }
}else{
    $controllerBack->loginBack();
}

}catch(Exception $e){
    
} 
