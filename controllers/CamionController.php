<?php
include_once('../models/Camion.php');
include_once('../database/config.php');
class CamionControle extends Connexion{
    private $idc,$typc,$marquec,$matriculec;
    function __construct(){
        parent::__construct();
    }
    function insertCam(Camion $cam){
        $query="insert into camion(typc,marquec,matriculec) values (?, ?, ?)";
        $res=$this->pdo->prepare($query);
        $tabcam=array($cam->getTypc(),$cam->getMarquec(),$cam->getMatriculec());
        return $res->execute($tabcam);
    }
    function deleteCam($idc){
        $query="delete from camion where idc=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idc));
    }
    function listeCam(){
        $query = "select * from camion";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getCamion($idc){
        $query="select * from camion where idc = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idc));
        $array= $res->fetch();
        return $array;
    }
    function modifierCam(Camion $cam){
        $sql = "update camion set  typc=?, marquec=?,matriculec=? WHERE idc=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute(array($cam->getTypc(),$cam->getMarquec(),$cam->getMatriculec(),$cam->getIdc()));
    }
    function getTotalCamions()
    {
        $query = "SELECT COUNT(*) as total_camions FROM camion";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $result = $res->fetch(PDO::FETCH_ASSOC);

        return $result['total_camions'] ?? 0; 
    }
}