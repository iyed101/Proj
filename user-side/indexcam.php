<?php
include_once("../controllers/CamionController.php");
$cam= new CamionControle();
$res=$cam->listeCam();

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
        <h1  >Liste des camions</h1>
        <table border=1 class="table table-striped">
            <tr>
                <td>Identifiant</td>
                <td>type</td>
                <td>marque</td>
                <td>matricule</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
            <?php
                while($l=$res->fetch()){
                    if($l!=false){
                        echo"<tr>
                        <td>$l[0]</td>
                        <td>$l[1]</td>
                        <td>$l[2]</td>
                        <td>$l[3]</td>
                        <td><a href='suppc.php?id=$l[0]'>Supprimer</a></td> 
                        <td><a href ='modiffc.php?id=$l[0]'>Modifier</a></td>
                        </tr>";
                    }
                    
                }
            ?>
                
        </table>
        <table>
        <tr><td><a href="ajoutCamion.php">ajouter camion </a></td></tr>
            <tr><td><a href="index.php">Page principale </a></td></tr>
        </tr>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>