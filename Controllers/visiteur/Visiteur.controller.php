<?php
//le visiteur a access a toutes les parties visibles du site

//recuperation du controller principal
require_once("./Controllers/MainController.controller.php");


//creation de l'heritage de notre classe MainControoller
class VisiteurController extends MainController{

    public function accueil(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Title de la page d'accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/common/tempate.php"
        ];
        $this->genererPage($data_page);
    }

    public function pageErreur($msg){
        parent::pageErreur($msg);
    }

}

?> 