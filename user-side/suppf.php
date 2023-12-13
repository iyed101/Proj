<?php 
require_once('../controllers/FournisseurController.php');
$cltch= new FournisseurControle();
$cltch->deleteFour($_GET['id']);
header('Location:indexfour.php');
?>