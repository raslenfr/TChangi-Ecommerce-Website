<?php

include '../Controller/LivreurC.php';

$error = "";

// create client
$livreur = null;

// create an instance of the controller
$livreurC = new LivreurC();
if (
    isset($_POST["NameLivreur"]) &&
    isset($_POST["EmailLivreur"]) &&
    isset($_POST["PassLivreur"]) 
 
) {
    if (
        !empty($_POST['NameLivreur']) &&
        !empty($_POST["EmailLivreur"]) &&
        !empty($_POST["PassLivreur"]) 
      
    ) {
        $livreur = new Livreur(
            null,
            $_POST['NameLivreur'],
            $_POST['EmailLivreur'],
            $_POST['PassLivreur']
        );
        $livreurC->addClient($livreur);
        header('Location:listeLivreur.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <link rel="stylesheet" href="../Style/style.css">

</head>

<body>
    <a href="../View/listeLivreur.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>




    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="firstName">Name:
                    </label>
                </td>
                <td><input type="text" name="NameLivreur" id="NameLivreur" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Email:
                    </label>
                </td>
                <td><input type="text" name="EmailLivreur" id="EmailLivreur" maxlength="50"></td>
            </tr>
            <tr>
                <td>
                    <label for="address">Password:
                    </label>
                </td>
                <td>
                    <input type="text" name="PassLivreur" id="PassLivreur">
                </td>
            </tr>
           
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>