<?php
class Camion{
    private $idc,$typc,$marquec,$matriculec,$dispo;
    function __construct($typc="",$marquec="",$matriculec="",$dispo=""){
        $this->typc=$typc;
        $this->marquec=$marquec;
        $this->matriculec=$matriculec;
        $this->dispo=$dispo;
    }
    public function getTypc(){
        return $this->typc;
    }
    public function getMarquec(){
        return $this->marquec;
    }
    public function getMatriculec(){
        return $this->matriculec;
    }
    public function getdispo(){
        return $this->dispo;
    }
    public function getIdc(){
        return $this->idc;
    }
    public function setTypc($typc){
        $this->typc=$typc;
    }
    public function setMarquec($marquec){
        $this->marquec=$marquec;
    }
    public function setMatriculec($matriculec){
        $this->matriculec=$matriculec;
    }
    public function setdispo($dispo){
        $this->dispo=$dispo;
    }
    public function setIdc($idc){
        $this->idc=$idc;
    }
}
?>