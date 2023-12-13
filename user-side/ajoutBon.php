<?php
include_once("../controllers/ChauffeurController.php");
$chauf= new ChauffeurControle();
$res=$chauf->listeChauf();
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
        
        <form action="ajoutBon_action.php" method="post">
            <h1 class="form-label">Nouveau bon</h1>
            <table>
                <tr>
                    <td>Type</td>
                    <td><select name="type" required>
                        <option value="semi">Semi</option>
                        <option value="poid lourd">Poid lourd</option>
                        <option value="petite piece">Petite pièce</option>
                    </select></td>
                    </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required></td>
                </tr>
                <tr>
                    <td>Lieu de charge</td>
                    <td><select name="lieuCharge">
                        <option value="Tunis">Tunis</option>
                        <option value="Ariana">Ariana</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Mannouba">Mannouba</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Beja">Béja</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Zaghouan">Zaghouan</option>
                        <option value="Siliana">Siliana</option>
                        <option value="Kef"> Kef</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Kairouan">Kairouan</option>
                        <option value="Gafsa">Gafsa</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Gabes">Gabès</option>
                        <option value="Medenine">Médenine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Kebili">Kebili</option>
                        <option value="Tataouine">Tataouine</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Tonnage</td>
                    <td><input type="number" step="0.01" min="0" name="tonnage"></td>
                </tr>
                <tr>
                    <td>chouffeur</td>
                    <td><select name="idch">
                    <?php
                        while($l=$res->fetch()){
                            echo"<option value=".$l[0].">$l[3] $l[4]</option>";
                        }
                    ?>
                    </select></td>
                </tr>
                    <td><input type="submit" value="ajouter"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>