<?php
include_once("../controllers/CamionController.php");
include_once("../controllers/ChauffeurController.php");
include_once("../controllers/FournisseurController.php");
$cam= new CamionControle();
$chauf= new ChauffeurControle();
$four= new FournisseurControle();
$res=$cam->listeCam();
$res2=$chauf->listeChauf();
$res3=$four->listeFour();
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f8f9fa;
            }

            form {
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #007bff;
                text-align: center;
            }

            table {
                width: 100%;
            }

            td {
                padding: 8px;
            }

            input[type="submit"], input[type="reset"] {
                background-color: #007bff;
                color: #fff;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover, input[type="reset"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <h1  >Liste des chauffeurs</h1>
        <table border=1 class="table table-striped">
            <tr>
                <td>Identifiant</td>
                <td>Numero de cin</td>
                <td>Numero de telephone</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adresse</td>
                <td>Camion</td>
                <td>Fournisseur</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
            <?php
                while($l2=$res2->fetch()){
                    $camion=$cam->getCamion($l2[6]);
                    $fournisseur=$four->getFour($l2[7]);
                    if($l2!=false){
                        echo"<tr>
                        <td>$l2[0]</td>
                        <td>$l2[1]</td>
                        <td>$l2[2]</td>
                        <td>$l2[3]</td>
                        <td>$l2[4]</td>
                        <td>$l2[5]</td>
                        <td>$camion[3]</td>
                        <td>$fournisseur[3] $fournisseur[4]</td>
                        <td><a href='suppch.php?id=$l2[0]'>Supprimer</a></td> 
                        <td><a href ='modiffch.php?id=$l2[0]'>Modifier</a></td>
                        </tr>";
                    }
                }
            ?>
                
        </table>
        <table>
        <tr>
            <tr><td><a href="ajoutChauffeur.php">ajouter chauffeur </a></td></tr>
            <tr><td><a href="index.php">Page principale </a></td></tr>
        </tr>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>