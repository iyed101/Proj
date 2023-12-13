<?php
include_once('../models/bon.php');
include_once('../database/config.php');
class BonControle extends Connexion{
    private $idb,$type,$date,$lieuCharge,$tonnage,$prixkilo,$prixtotale,$idch;
    function __construct(){
        parent::__construct();
    }
    function insertBon(Bon $bon){
        $query="insert into bon(type,date,lieuCharge,tonnage,prixkilo,prixtotale,idch) values (?, ?, ?, ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        $tabbon=array($bon->gettype(),$bon->getdate(),$bon->getlieuCharge(),$bon->gettonnage(),$bon->getprixkilo(),$bon->getprixtotale(),$bon->getidch());
        return $res->execute($tabbon);
    }
    function deletebon($idb){
        $query="delete from bon where idb=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idb));
    }
    function listeBon(){
        $query = "select * from bon";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getBon($idb){
        $query="select * from bon where idb = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idb));
        $array= $res->fetch();
        return $array;
    }
    function modifierBon(Bon $bon){
        $sql = "update bon set  type=?, date=?,lieuCharge=?,tonnage=?,prixkilo=?,prixtotale=?,idch=? WHERE idb=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute(array($bon->gettype(),$bon->getdate(),$bon->getlieuCharge(),$bon->gettonnage(),$bon->getprixkilo(),$bon->getprixtotale(),$bon->getidch(),$bon->getidb()));
    }
    function getTotalTonnage()
    {
        $query = "SELECT SUM(tonnage) as total_tonnage FROM bon";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $result = $res->fetch(PDO::FETCH_ASSOC);

        return $result['total_tonnage'] ?? 0; 
    }
    function getTotalPrix()
    {
        $query = "SELECT SUM(prixtotale) as total_price FROM bon";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $result = $res->fetch(PDO::FETCH_ASSOC);

        return $result['total_price'] ?? 0; 
    }
}