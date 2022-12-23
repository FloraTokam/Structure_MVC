<?php
session_start();

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])?"https":"http")."://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

require_once("./Controllers/visiteur/Visiteur.controller.php");
$visiteurController = new VisiteurController();

try{
    if(empty($_GET['page'])){
        $page = "accueil";
    }else{
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "accueil" : $visiteurController->accueil();
        break;
        case "compte" :
            switch($url[1]){
                case "profil" : $visiteurController->accueil();
                break;
            }
        break;
        default : throw new Exception("La page n'existe pas");
    }
}catch (Exception $e){
    $visiteurController->pageErreur($e->getMessage());
}
?>