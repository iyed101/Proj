<?php 
require_once('../controllers/ChauffeurController.php');
$cltch= new ChauffeurControle();
$cltch->deleteChauf($_GET['id']);
header('Location:indexchauf.php');
?>