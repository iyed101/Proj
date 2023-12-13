<?php
include_once("../controllers/ChauffeurController.php");
include_once("../controllers/BonController.php");
$chauf= new ChauffeurControle();
$bon= new BonControle();
$res2=$chauf->listeChauf();
$res4=$bon->listeBon();
$res5=$bon->getTotalPrix();
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
        <h1   >Liste des bons</h1>
        <table border=1 class="table table-striped">
            <tr>
                <td>Identifiant</td>
                <td>Type</td>
                <td>Date</td>
                <td>Lieu de charge</td>
                <td>tonnage</td>
                <td>Prix kilo</td>
                <td>Prix mission</td>
                <td>Identifiant chouffeur</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
            <?php
                while($l4=$res4->fetch()){
                    $chauffeur=$chauf->getChauf($l4[7]);
                    if($l4!=false){
                        echo"<tr>
                        <td>$l4[0]</td>
                        <td>$l4[1]</td>
                        <td>$l4[2]</td>
                        <td>$l4[3]</td>
                        <td>$l4[4]</td>
                        <td>$l4[5]</td>
                        <td>$l4[6]</td>
                        <td>$chauffeur[3] $chauffeur[4]</td>
                        <td><a href='suppb.php?id=$l4[0]'>Supprimer</a></td> 
                        <td><a href ='modiffb.php?id=$l4[0]'>Modifier</a></td>
                        </tr>";
                    }
                    
                }
            ?>
             <tr><td colspan="3" >Prix totale</td> <td  colspan="7" align="right"><?php echo $res5 ?></td></tr>   
        </table>
        <table>
            <tr><td><a href="ajoutBon.php">Ajouter bon </a></td>
            <tr><td><a href="index.php">Page principale </a></td></tr>
        </tr>
        </table>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>