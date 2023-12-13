<?php
class Bon{
    private $idb,$type,$date,$lieuCharge,$tonnage,$prixkilo,$prixtotale,$idch;
    function __construct($type="",$date="",$lieuCharge="",$tonnage="",$prixkilo="",$prixtotale="",$idch=""){
        $this->type=$type;
        $this->date=$date;
        $this->lieuCharge=$lieuCharge;
        $this->tonnage=$tonnage;
        $this->prixkilo=$prixkilo;
        $this->prixtotale=$prixtotale;
        $this->idch=$idch;
    }
    public function gettype(){
        return $this->type;
    }
    public function getdate(){
        return $this->date;
    }
    public function getlieuCharge(){
        return $this->lieuCharge;
    }
    public function gettonnage(){
        return $this->tonnage;
    }
    public function getprixkilo(){
        return $this->prixkilo;
    }
    public function getprixtotale(){
        return $this->prixtotale;
    }
    public function getidch(){
        return $this->idch;
    }
    public function getidb(){
        return $this->idb;
    }

    public function settype($type){
        $this->type=$type;
    }
    public function setdate($date){
        $this->date=$date;
    }
    public function setlieuCharge($lieuCharge){
        $this->lieuCharge=$lieuCharge;
    }
    public function settonnage($tonnage){
        $this->tonnage=$tonnage;
    }
    public function setprixkilo($prixkilo){
        $this->prixkilo=$prixkilo;
    }
    public function setprixtotale($prixtotale){
        $this->prixtotale=$prixtotale;
    }
    public function setidch($idch){
        $this->idch=$idch;
    }
    public function setidb($idb){
        $this->idb=$idb;
    }
}
?>