<?php
require_once("./Model/MainManager.model.php");

class VisiteurManager extends MainManager{
   public function getUtilisateur(){
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}
?>
