<?php
require_once('../controllers/FournisseurController.php');
require_once('../models/fournisseur.php');
$fournisseurCtr=new FournisseurControle();
$fournisseur=new Fournisseur();

$fournisseur->setcinf($_POST['cinf']);
$fournisseur->setnumTelf($_POST['numTelf']);
$fournisseur->setnomf($_POST['nomf']);
$fournisseur->setprenomf($_POST['prenomf']);
$fournisseur->setadressef($_POST['adressef']);
$fournisseur->setidf($_POST['idf']);
$fournisseurCtr->modifierFour($fournisseur);
header('Location:indexfour.php');

?>