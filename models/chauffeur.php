<?php
class Chauffeur{
    private $idchauf,$cinCh,$numTelCh,$nomCh,$prenomCh,$adresseCh,$idc,$idf,$dispo;
    function __construct($cinCh="",$numTelCh="",$nomCh="",$prenomCh="",$adresseCh="",$idc="",$idf="",$dispo=""){
        $this->cinCh=$cinCh;
        $this->numTelCh=$numTelCh;
        $this->nomCh=$nomCh;
        $this->prenomCh=$prenomCh;
        $this->adresseCh=$adresseCh;
        $this->idc=$idc;
        $this->idf=$idf;
        $this->dispo=$dispo;
    }
    public function getcinCh(){
        return $this->cinCh;
    }
    public function getnumTelCh(){
        return $this->numTelCh;
    }
    public function getnomCh(){
        return $this->nomCh;
    }
    public function getprenomCh(){
        return $this->prenomCh;
    }
    public function getadresseCh(){
        return $this->adresseCh;
    }
    
    public function getidc(){
        return $this->idc;
    }
    public function getidf(){
        return $this->idf;
    }
    public function getdispo(){
        return $this->dispo;
    }
    public function getidchauf(){
        return $this->idchauf;
    }

    public function setcinCh($cinCh){
        $this->cinCh=$cinCh;
    }
    public function setnumTelCh($numTelCh){
        $this->numTelCh=$numTelCh;
    }
    public function setnomCh($nomCh){
        $this->nomCh=$nomCh;
    }
    public function setprenomCh($prenomCh){
        $this->prenomCh=$prenomCh;
    }
    public function setadresseCh($adresseCh){
        $this->adresseCh=$adresseCh;
    }
    public function setidc($idc){
        $this->idc=$idc;
    }
    public function setidf($idf){
        $this->idf=$idf;
    }
    public function setdispo($dispo){
        $this->dispo=$dispo;
    }
    public function setidchauf($idchauf){
        $this->idchauf=$idchauf;
    }
}
?>