<?php
require_once("./Controller/MainController.controller.php");//on genere une instance du main controller
//Dans un premier temps, si notre URL n’a pas de nom de page, lui indiquons d’afficher « page d’accueil »
//sinon il affichera « autres pages » 

if (empty($_GET['page'])){
    $page = "accueil";
}//Nous allons ensuite sécuriser notre URL avec le filter_var et FILTER_SANITIZE_URL afin de filtrer les URL entrées et
//d’éviter les caractères spéciau
else{
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL)); //on decoupe l'url avec le slash ensuite on securise avvec filter_var et filter_sanitize pour eviter les caracteres speciaux
    $page = $url[0];
}

$page_description = "Description de la page d'acceuil";
$page_title = "Titre de la page d'accueil";
$page_content = "<h1>Hello, world!</h1>";
require_once("Views/common/template.php");


?>


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