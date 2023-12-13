<?php
include_once("../models/fournisseur.php");
include_once("../controllers/FournisseurController.php");
$cinf=$_POST['cinf'];
$numTelf=$_POST['numTelf'];
$nomf=$_POST['nomf'];
$prenomf=$_POST['prenomf'];
$adressef=$_POST['adressef'];
$fournisseur= new Fournisseur($cinf,$numTelf,$nomf,$prenomf,$adressef);
$fournisseurctr= new FournisseurControle();
$reslt=$fournisseurctr->insertFourn($fournisseur);
if($reslt==true){
    echo "<script>alert('valide!!')</script>";
    header("Refresh:0;url=indexfour.php");
}
?>