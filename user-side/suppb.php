<?php 
require_once('../controllers/BonController.php');
$clt= new BonControle();
$clt->deletebon($_GET['id']);
header('Location:indexbon.php');
?>