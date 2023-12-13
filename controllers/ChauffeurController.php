<?php
include_once('../models/chauffeur.php');
include_once('../database/config.php');
class ChauffeurControle extends Connexion{
    private $idchauf,$cinCh,$numTelCh,$nomCh,$prenomCh,$adresseCh,$idc,$idf,$dispo;
    function __construct(){
        parent::__construct();
    }
    function insertChauf(Chauffeur $chauf){
        $query="insert into chauffeur(cinCh,numTelCh,nomCh,prenomCh,adresseCh,idc,idf,dispo) values (?, ?, ?, ?, ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        $tabchauf=array($chauf->getcinCh(),$chauf->getnumTelCh(),$chauf->getnomCh(),$chauf->getprenomCh(),$chauf->getadresseCh(),$chauf->getidc(),$chauf->getidf(),$chauf->getdispo());
        return $res->execute($tabchauf);
    }
    function deleteChauf($idchauf){
        $query="delete from chauffeur where idchauf=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idchauf));
    }
    function listeChauf(){
        $query = "select * from chauffeur";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getChauf($idchauf){
        $query="select * from chauffeur where idchauf = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idchauf));
        $array= $res->fetch();
        return $array;
    }
    function modifierChauf(Chauffeur $chauf){
        $sql = "update chauffeur set  cinCh=?, numTelCh=?,nomCh=?,prenomCh=?,adresseCh=?,idc=?,idf=?,dispo=? WHERE idchauf=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute(array($chauf->getcinCh(),$chauf->getnumTelCh(),$chauf->getnomCh(),$chauf->getprenomCh(),$chauf->getadresseCh(),$chauf->getidc(),$chauf->getidf(),$chauf->getdispo(),$chauf->getidchauf()));
    }
    function countChauffeurs() {
        $query = "SELECT COUNT(*) FROM chauffeur";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $count = $res->fetchColumn();
        return $count;
    }
}