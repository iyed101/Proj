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
        
        <form action="ajoutFournisseur_action.php" method="post">
            <h1>Nouveau fournisseur</h1>
            <table>
                <tr>
                    <td>Numero de cin</td>
                    <td><input type="text" name="cinf" maxlength="8"></td>
                </tr>
                <tr>
                    <td>Numero de telephone</td>
                    <td><input type="text" name="numTelf" maxlength="8"></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nomf"></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><input type="text" name="prenomf"></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><input type="text" name="adressef"></td>
                </tr>
                    <td><input type="submit" value="ajouter"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </form>
    </body>
    </html>