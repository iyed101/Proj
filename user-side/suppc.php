<?php 
require_once('../controllers/CamionController.php');
$clt= new CamionControle();
$clt->deleteCam($_GET['id']);
header('Location:indexcam.php');
?>