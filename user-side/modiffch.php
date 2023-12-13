<?php
require_once('../controllers/ChauffeurController.php');
require_once('../controllers/CamionController.php');
require_once('../controllers/FournisseurController.php');

$chauffeurCtr = new ChauffeurControle();
$cam = new CamionControle();
$four = new FournisseurControle();

$res = $chauffeurCtr->getChauf($_GET['id']);
$res2 = $cam->listeCam();
$res3 = $four->listeFour();
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
        <form name="f1" method="post" action="modificationChauffeur.php">
    <table border='1'>
        <tr>
            <td>id</td>
            <td><input type="text" name="idchauf" readonly="readonly" value="<?php echo $res[0] ?>" required/></td>
        </tr>
        <tr>
            <td>Numero de cin</td>
            <td><input type="text" name="cinCh" maxlength="8" value="<?php echo $res[1] ?>" required/></td>
        </tr>
        <tr>
            <td>Numero de telephone</td>
            <td><input type="text" name="numTelCh" maxlength="8" value="<?php echo $res[2] ?>" required/></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nomCh" value="<?php echo $res[3] ?>" required/></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" name="prenomCh" value="<?php echo $res[4] ?>" required/></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><input type="text" name="adresseCh" value="<?php echo $res[5] ?>" required/></td>
        </tr>
        <tr>
            <td>Identifiant camion</td>
            <td>
                <select name="idc" required>
                    <?php
                    while ($l2 = $res2->fetch()) {
                        $selected = ($l2[0] == $res[6]) ? 'selected' : '';
                        echo "<option value=" . $l2[0] . " $selected>$l2[3]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Identifiant fournisseur</td>
            <td>
                <select name="idf" required>
                    <?php
                    while ($l3 = $res3->fetch()) {
                        $selected = ($l3[0] == $res[7]) ? 'selected' : '';
                        echo "<option value=" . $l3[0] . " $selected>$l3[3] $l3[4]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
        <td>Disponibilité</td>
        <td><input type="text" name="dispo" value= "<?php echo $res[8] ?>"readonly="readonly"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="modifier" name="mod"/></td>
        </tr>
    </table>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
