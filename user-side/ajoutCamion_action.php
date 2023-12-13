<?php
include_once("../models/camion.php");
include_once("../controllers/CamionController.php");
$typc=$_POST['typc'];
$marquec=$_POST['marquec'];
$matriculec=$_POST['matriculec'];
$dispo=$_POST['dispo'];
$camion= new Camion($typc,$marquec,$matriculec,$dispo);
$camctr= new CamionControle();
$reslt=$camctr->insertCam($camion);
if($reslt==true){
    echo "<script>alert('valide!!')</script>";
    header("Refresh:0;url=indexcam.php");
}
?>