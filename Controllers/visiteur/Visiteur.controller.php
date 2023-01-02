<?php
//le visiteur a access a toutes les parties visibles du site

//recuperation du controller principal
require_once("./Controllers/MainController.controller.php");

//recuperation des données contenues dans le model visiteur
require_once("./Model/visiteur/Visiteur.model.php");

//creation de l'heritage de notre classe MainControoller
class VisiteurController extends MainController{
    private $visiteurManager;

//constructeur avec l'instanciation du visiteur Manager
    public function __construct(){
        $this->visiteurManager = new VisiteurManager();
    }

    public function accueil(){
        $utilisateur = $this->visiteurManager->getUtilisateur();
        //affichage des utilisateurs avec la variable utilisateur
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Title de la page d'accueil",
            "utilisateurs"=>$utilisateur,
            "view" => "Views/Visiteur/accueil.view.php",
            "template" => "Views/common/tempate.php"
        ];
        $this->genererPage($data_page);
    }

    public function pageErreur($msg){
        parent::pageErreur($msg);
    }

}

?> 