<?php
include_once('../controllers/ChauffeurController.php');
include_once('../controllers/BonController.php');
include_once('../controllers/FournisseurController.php');
include_once('../controllers/CamionController.php');
$chauffeurCtr = new ChauffeurControle();
$totalChauffeurs = $chauffeurCtr->countChauffeurs();
$bonController = new BonControle();
$totalTonnage = $bonController->getTotalTonnage();
$fournisseurController = new FournisseurControle();
$totalFournisseurs = $fournisseurController->getTotalFournisseurs();
$camionController = new CamionControle();
$totalCamions = $camionController->getTotalCamions();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Admin panel</title>

</head>
<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2 >Socodal</h2>
            </div>
            
        <div class="sidebar">
            <ul>
                <li>
                    <a href="">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="indexcam.php">
                        <i class="fas fa-truck"></i>
                        <div>Camio</div>
                    </a>
                </li>
                <li>
                    <a href="indexchauf.php">
                        <i class="fas fa-users"></i>
                        <div>Chauffeur</div>
                    </a>
                </li>
                <li>
                    <a href="indexfour.php">
                        <i class="fas fa-user"></i>
                        <div>Fournisseur</div>
                    </a>
                </li>
                <li>
                    <a href="indexbon.php">
                        <i class="fas fa-file"></i>
                        <div>Bon</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                    <div class="number"><?php echo $totalChauffeurs; ?></div>
                        <div class="card-name">Chauffeurs</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $totalCamions; ?></div>
                        <div class="card-name">Camions</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-truck"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $totalFournisseurs; ?></div>
                        <div class="card-name">Fournisseurs</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $totalTonnage; ?></div>
                        <div class="card-name">Tonnage totale</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                </div>
            </div>
            <div class="charts"></div>
        </div>
    </div>
</body>
</html>