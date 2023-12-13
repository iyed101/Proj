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
<script>
        function validateMatricule() {
            var matriculeInput = document.getElementById("matriculeInput").value;
            var pattern = /^\d{3} TN \d{2}$/;
            if (!pattern.test(matriculeInput)) {
                alert("Matricule est sous la frome '... TN ..'");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    

<?php
require_once('../controllers/CamionController.php');
$camionCtr=new CamionControle();
$res=$camionCtr->getCamion($_GET['id']);
?>
<form name = 'f1' method='post' action='modificationCamion.php' onsubmit="return validateMatricule();">
<table border='1'>
<tr>
<td>id</td>
<td><input type = "text" name = "idc" readonly="readonly" value = "<?php echo $res[0] ?>" required/></td></tr>
<tr>
<td>Type</td>
<td><select name="typc" value = "<?php echo $res[1] ?>">
    <option value="semi" <?php echo ($res[1] == 'semi') ? 'selected' : ''; ?>>Semi</option>
    <option value="poid lourd" <?php echo ($res[1] == 'poid lourd') ? 'selected' : ''; ?>>Poid lourd</option>
    <option value="petite piece" <?php echo ($res[1] == 'petite piece') ? 'selected' : ''; ?>>Petite pièce</option>
</select></td>
<tr>
<td>Marque</td>
<td><input type = "text" name = "marquec" value = "<?php echo $res[2] ?>" required/></td></tr>
<tr><td>matricule</td>
<td><input type = "text" name = "matriculec" id="matriculeInput" value = "<?php echo $res[3] ?>" required/></td></tr>
<tr>
    <td>Disponibilité</td>
    <td><input type="text" name="dispo" value= "<?php echo $res[4] ?>"readonly="readonly"> </td>
</tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</form>	
</body>
</html>