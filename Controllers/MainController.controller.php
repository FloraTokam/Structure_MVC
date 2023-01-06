<?php

abstract class MainController{

    protected function genererPage($data){
        extract($data);
        ob_start();
        require_once($view);
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
}

?>