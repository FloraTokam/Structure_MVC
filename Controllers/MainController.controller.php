<?php


class MainController{
    private function genererPage($data){
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    public function accueil(){
        $page_description = "Description de la page d'accueil";
        $page_title = "Titre de la page d'accueil";
        ob_start();
        require_once("./Views/accueil.view.php");
        $page_content = ob_get_clean();
        require_once("Views/common/template.php");
    }

    public function page1(){
        $page_description = "Description de la page 1";
        $page_title = "Titre de la page 1";
        ob_start();
        require_once("./Views/accueil.view.php");
        $page_content = ob_get_clean();
        require_once("Views/common/template.php");
    }

    public function page2(){
        $page_description = "Description de la page 2";
        $page_title = "Titre de la page 2";
        ob_start();
        require_once("./Views/accueil.view.php");
        $page_content = ob_get_clean();
        require_once("Views/common/template.php");
    }

    public function page3(){
        $page_description = "Description de la page 3";
        $page_title = "Titre de la page 3";
        ob_start();
        require_once("./Views/accueil.view.php");
        $page_content = ob_get_clean();
        require_once("Views/common/template.php");
    }

    public function pageErreur($msg){
        $page_description = "Page permanent de gérer les erreurs";
        $page_title = "Page d'erreur";
        ob_start();
        require_once("./Views/accueil.view.php");
        $page_content = ob_get_clean();
        require_once("Views/common/template.php");
    }
}

















/*
abstract class MainController{

    protected function genererPage($data){
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        $page_content($template);
    }

    protected function pageErreur($msg){
        $data_page = [
            "page_description" => "Page permettant de gerer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
}*/

?>