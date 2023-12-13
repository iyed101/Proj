<?php
require_once('../controllers/ChauffeurController.php');
require_once('../models/chauffeur.php');
$chauffeurCtr=new ChauffeurControle();
$chauffeur=new Chauffeur();

$chauffeur->setcinCh($_POST['cinCh']);
$chauffeur->setnumTelCh($_POST['numTelCh']);
$chauffeur->setnomCh($_POST['nomCh']);
$chauffeur->setprenomCh($_POST['prenomCh']);
$chauffeur->setadresseCh($_POST['adresseCh']);
$chauffeur->setidc($_POST['idc']);
$chauffeur->setidf($_POST['idf']);
$chauffeur->setdispo($_POST['dispo']);
$chauffeur->setidchauf($_POST['idchauf']);
$chauffeurCtr->modifierChauf($chauffeur);
header('Location:indexchauf.php');

?>