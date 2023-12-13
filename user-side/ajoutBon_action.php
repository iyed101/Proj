<?php
include_once("../models/bon.php");
include_once("../controllers/BonController.php");
$type=$_POST['type'];
$date=$_POST['date'];
$lieuCharge=$_POST['lieuCharge'];
$tonnage=$_POST['tonnage'];
$prixkilo ;
switch ($lieuCharge) {
    case 'Nabeul':
        $prixkilo=360;
        break;
    case 'Ben Arous':
        $prixkilo=370;
        break;
    case 'Tunis':
        $prixkilo=380;
        break;
    case 'Mannouba':
        $prixkilo=385;
        break;
    case 'Ariana':
        $prixkilo=390;
        break;
    case 'Bizerte':
        $prixkilo=400;
        break;
    case 'Beja':
        $prixkilo=410;
        break;
    case 'Jendouba':
        $prixkilo=420;
        break;
    case 'Zaghouan':
        $prixkilo=375;
        break;
    case 'Siliana':
        $prixkilo=415;
        break;
    case 'Kef':
        $prixkilo=420;
        break;
    case 'Sousse':
        $prixkilo=390;
        break;  
    case 'Kairouan':
        $prixkilo=420;
        break;
    case 'Kasserine':
        $prixkilo=430;
        break;
    case 'Monastir':
        $prixkilo=410;
        break;
    case 'Mahdia':
        $prixkilo=420;
        break;
    case 'Sfax':
        $prixkilo=430;
        break;
    case 'Sidi Bouzid':
        $prixkilo=430;
        break;
    case 'Gafsa':
        $prixkilo=440;
        break;
    case 'Tozeur':
        $prixkilo=450;
        break;
    case 'Gabes':
        $prixkilo=460;
        break;
    case 'Kebili':
        $prixkilo=470;
        break;
    case 'Medenine':
        $prixkilo=480;
        break;
    case 'Tataouine':
        $prixkilo=490;
        break;
    default:
        $prixkilo = 0; 
        break;
}
$prixAB=$tonnage*$prixkilo;
$typeBonus = 0; 
switch ($type) {
    case 'semi':
        $typeBonus=$prixAB*0.1;
        break;
    case  'poid lourd':
        $typeBonus=$prixAB*0.07;
        break;
    case 'petite piece':
        $typeBonus=$prixAB*0.03;
        break;
}
$prixtotale=$prixAB+$typeBonus;
$idch=$_POST['idch'];
$bon= new Bon($type,$date,$lieuCharge,$tonnage,$prixkilo,$prixtotale,$idch);
$bonctr= new BonControle();
$reslt=$bonctr->insertBon($bon);
if($reslt==true){
    echo "<script>alert('valide!!')</script>";
    header("Refresh:0;url=indexbon.php");
}
?>