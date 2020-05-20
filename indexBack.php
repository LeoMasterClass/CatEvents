<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

try {
// appele au controllerBack
$controllerBack = new \Projet\controllers\ControllerBack();
if(isset($_GET['action'])){
    // Renvoie a la page demander + test si log en admin
    if($_GET['action'] == 'admin'){
        if ($_SESSION['admin'] == 1) {
            $controllerBack->adminBack();
        }else{
            header('Location: /');
        }
    }else if($_GET['action'] == 'articlesAdmin'){
        if ($_SESSION['admin'] == 1) {
        $controllerBack->articlesAdmin();
        }else{
            header('Location: /');
        }
    }else if($_GET['action'] == 'articlesCreate'){
        if ($_SESSION['admin'] == 1) {
        $controllerBack->articleCreate();
        }else{
            header('Location: /');
        }
    }else if($_GET['action'] == 'gestionMembre'){
        if ($_SESSION['admin'] == 1) {
        $controllerBack->gestionMembre();
        }else{
            header('Location: /');
        }
    }else if($_GET['action'] == 'showContact'){
        if ($_SESSION['admin'] == 1) {
        $controllerBack->ShowContact();
        }else{
            header('Location: /');
        }
    }elseif ($_GET['action'] == 'deleteMembre'){
        if ($_SESSION['admin'] == 1) {
        $id = $_GET['id'];
        $controllerBack->deleteUsers($id);
        }else{
            header('Location: /');
        }
    }elseif ($_GET['action'] == 'upgradeMembre'){
        if ($_SESSION['admin'] == 1) {
        $id = $_GET['id'];
        $controllerBack->upgradeUsers($id);
        }else{
            header('Location: /');
        }
    }elseif ($_GET['action'] == 'reduceMembre'){
        if ($_SESSION['admin'] == 1) {
        $id = $_GET['id'];
        $controllerBack->reduceUsers($id);
        }else{
            header('Location: /');
        }
    }elseif ($_GET['action'] == 'decoAdmin'){
        if ($_SESSION['admin'] == 1) {
        $controllerBack->decoAdmin();
        }else{
            header('Location: /');
        }
    }
}else{
    // chemin par defaut du routeur Back
    $controllerBack->loginAdmin();
}

}catch(Exception $e){
    
} 
