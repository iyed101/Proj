<?php
include_once('../models/fournisseur.php');
include_once('../database/config.php');
class FournisseurControle extends Connexion{
    private $idf,$cinf,$numTelf,$nomf,$prenomf,$adressef;
    function __construct(){
        parent::__construct();
    }
    function insertFourn(Fournisseur $four){
        $query="insert into fournisseur(cinf,numTelf,nomf,prenomf,adressef) values (?, ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        $tabfour=array($four->getcinf(),$four->getnumTelf(),$four->getnomf(),$four->getprenomf(),$four->getadressef());
        return $res->execute($tabfour);
    }
    function deleteFour($idfour){
        $query="delete from fournisseur where idf=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idfour));
    }
    function listeFour(){
        $query = "select * from fournisseur";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getFour($idfour){
        $query="select * from fournisseur where idf = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idfour));
        $array= $res->fetch();
        return $array;
    }
    function modifierFour(Fournisseur $four){
        $sql = "update fournisseur set  cinf=?, numTelf=?,nomf=?,prenomf=?,adressef=? WHERE idf=?";
        $stmt= $this->pdo->prepare($sql);
        return $stmt->execute(array($four->getcinf(),$four->getnumTelf(),$four->getnomf(),$four->getprenomf(),$four->getadressef(),$four->getidf()));
    }
    function getTotalFournisseurs()
    {
        $query = "SELECT COUNT(*) as total_fournisseurs FROM fournisseur";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $result = $res->fetch(PDO::FETCH_ASSOC);

        return $result['total_fournisseurs'] ?? 0; 
    }
}