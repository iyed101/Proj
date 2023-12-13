<?php
require_once('../controllers/CamionController.php');
require_once('../models/camion.php');
$camionCtr=new CamionControle();
$camion=new Camion();
$camion->setTypc($_POST['typc']);
$camion->setMarquec($_POST['marquec']);
$camion->setMatriculec($_POST['matriculec']);
$camion->setdispo($_POST['dispo']);
$camion->setIdc($_POST['idc']);
$camionCtr->modifierCam($camion);
header('Location:indexcam.php');

?>