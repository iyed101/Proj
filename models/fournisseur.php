<?php
class Fournisseur{
    private $idf,$cinf,$numTelf,$nomf,$prenomf,$adressef;
    function __construct($cinf="",$numTelf="",$nomf="",$prenomf="",$adressef=""){
        $this->cinf=$cinf;
        $this->numTelf=$numTelf;
        $this->nomf=$nomf;
        $this->prenomf=$prenomf;
        $this->adressef=$adressef;
    }
    public function getcinf(){
        return $this->cinf;
    }
    public function getnumTelf(){
        return $this->numTelf;
    }
    public function getnomf(){
        return $this->nomf;
    }
    public function getprenomf(){
        return $this->prenomf;
    }
    public function getadressef(){
        return $this->adressef;
    }
    public function getidf(){
        return $this->idf;
    }



    public function setcinf($cinf){
        $this->cinf=$cinf;
    }
    public function setnumTelf($numTelf){
        $this->numTelf=$numTelf;
    }
    public function setnomf($nomf){
        $this->nomf=$nomf;
    }
    public function setprenomf($prenomf){
        $this->prenomf=$prenomf;
    }
    public function setadressef($adressef){
        $this->adressef=$adressef;
    }
    public function setidf($idf){
        $this->idf=$idf ;
    }
}
?>