<?php
include_once("../models/chauffeur.php");
include_once("../controllers/ChauffeurController.php");
$cinCh=$_POST['cinCh'];
$numTelCh=$_POST['numTelCh'];
$nomCh=$_POST['nomCh'];
$prenomCh=$_POST['prenomCh'];
$adresseCh=$_POST['adresseCh'];
$idc=$_POST['idc'];
$idf=$_POST['idf'];
$dispo = 1;
require_once('../controllers/CamionController.php');
require_once('../models/camion.php');
$camionCtr=new CamionControle();
$cam=$camionCtr->getCamion($idc);
$camion=new Camion();
$camion->setTypc($cam[1]);
$camion->setMarquec($cam[2]);
$camion->setMatriculec($cam[3]);
$camion->setdispo(0);
$camion->setIdc($cam[0]);
$camionCtr->modifierCam($camion);
$chauffeur= new Chauffeur($cinCh,$numTelCh,$nomCh,$prenomCh,$adresseCh,$idc,$idf,$dispo);
$chauffeurctr= new ChauffeurControle();
$reslt=$chauffeurctr->insertChauf($chauffeur);
if($reslt==true){
    echo "<script>alert('valide!!')</script>";
    header("Refresh:0;url=indexchauf.php");
}
?>