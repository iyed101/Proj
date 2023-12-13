<?php
require_once('../controllers/BonController.php');
include_once("../controllers/ChauffeurController.php");
$bonCtr=new BonControle();
$chauf= new ChauffeurControle();
$res=$bonCtr->getBon($_GET['id']);
$res2=$chauf->listeChauf();
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
        <form name = 'f1' method='post' action='modificationBon.php'>
<table border='1'>
<tr>
<td>id</td>
<td><input type = "text" name = "idb" readonly="readonly" value = "<?php echo $res[0] ?>" required /></td></tr>
<tr>
<td>Type</td>
<td><select name="type" value = "<?php echo $res[1] ?>">
    <option value="semi" <?php echo ($res[1] == 'semi') ? 'selected' : ''; ?>>Semi</option>
    <option value="poid lourd" <?php echo ($res[1] == 'poid lourd') ? 'selected' : ''; ?>>Poid lourd</option>
    <option value="petite piece" <?php echo ($res[1] == 'petite piece') ? 'selected' : ''; ?>>Petite pièce</option>
</select></td>
</tr>
<tr>
<td>Date</td>
<td><input type = "date" name = "date" min="<?php echo date('Y-m-d'); ?>" value = "<?php echo $res[2] ?>"required /></td></tr>
<tr><td>Lieu de charge</td>
<td><select name="lieuCharge" alue = "<?php echo $res[3] ?>" required >
    <option value="Tunis" <?php echo ($res[3] == 'Tunis') ? 'selected' : ''; ?>>Tunis</option>
    <option value="Ariana" <?php echo ($res[3] == 'Ariana') ? 'selected' : ''; ?>>Ariana</option>
    <option value="Ben Arous"<?php echo ($res[3] == 'Ben Arous') ? 'selected' : ''; ?>>Ben Arous</option>
    <option value="Mannouba" <?php echo ($res[3] == 'Mannouba') ? 'selected' : ''; ?>>Mannouba</option>
    <option value="Bizerte" <?php echo ($res[3] == 'Bizerte') ? 'selected' : ''; ?>>Bizerte</option>
    <option value="Nabeul" <?php echo ($res[3] == 'Nabeul') ? 'selected' : ''; ?>>Nabeul</option>
    <option value="Beja" <?php echo ($res[3] == 'Beja') ? 'selected' : ''; ?>>Béja</option>
    <option value="Jendouba" <?php echo ($res[3] == 'Jendouba') ? 'selected' : ''; ?>>Jendouba</option>
    <option value="Zaghouan" <?php echo ($res[3] == 'Zaghouan') ? 'selected' : ''; ?>>Zaghouan</option>
    <option value="Siliana" <?php echo ($res[3] == 'Siliana') ? 'selected' : ''; ?>>Siliana</option>
    <option value="Kef" <?php echo ($res[3] == 'Kef') ? 'selected' : ''; ?>> Kef</option>
    <option value="Sousse" <?php echo ($res[3] == 'Sousse') ? 'selected' : ''; ?>>Sousse</option>
    <option value="Monastir" <?php echo ($res[3] == 'Monastir') ? 'selected' : ''; ?>>Monastir</option>
    <option value="Mahdia" <?php echo ($res[3] == 'Mahdia') ? 'selected' : ''; ?>>Mahdia</option>
    <option value="Kasserine" <?php echo ($res[3] == 'Kasserine') ? 'selected' : ''; ?>>Kasserine</option>
    <option value="Sidi Bouzid" <?php echo ($res[3] == 'Sidi Bouzid') ? 'selected' : ''; ?>>Sidi Bouzid</option>
    <option value="Kairouan" <?php echo ($res[3] == 'Kairouan') ? 'selected' : ''; ?>>Kairouan</option>
    <option value="Gafsa" <?php echo ($res[3] == 'Gafsa') ? 'selected' : ''; ?>>Gafsa</option>
    <option value="Sfax" <?php echo ($res[3] == 'Sfax') ? 'selected' : ''; ?>>Sfax</option>
    <option value="Gabes" <?php echo ($res[3] == 'Gabes') ? 'selected' : ''; ?>>Gabès</option>
    <option value="Medenine" <?php echo ($res[3] == 'Medenine') ? 'selected' : ''; ?>>Médenine</option>
    <option value="Tozeur" <?php echo ($res[3] == 'Tozeur') ? 'selected' : ''; ?>>Tozeur</option>
    <option value="Kebili" <?php echo ($res[3] == 'Kebili') ? 'selected' : ''; ?>>Kebili</option>
    <option value="Tataouine" <?php echo ($res[3] == 'Tataouine') ? 'selected' : ''; ?>>Tataouine</option>
</select></td>
</tr>
<tr>
<td>Tonnage</td>
<td><input type = "number" step="0.01" name = "tonnage" min="0" value = "<?php echo $res[4] ?>" required /></td></tr>
<td>Chouffeur</td>
<td><select name="idch" >
    <?php
    while($l = $res2->fetch()){
        $selected = ($l[0] == $res[7]) ? 'selected' : '';
        echo"<option value=".$l[0].">$l[3] $l[4]</option>";
    }
    ?>
</select></td>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</form>	
    </body>
</html>
