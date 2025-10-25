<?php

include '../Controller/LivreurC.php';

$error = "";

// create client
$livreur = null;

// create an instance of the controller
$livreurC = new LivreurC();
if (
    isset($_POST["idClient"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) 
) {
    if (
        !empty($_POST["idClient"]) &&
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) 
    ) {
        $livreur = new Livreur(
            $_POST['idClient'],
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address']
        );
        $livreurC->updateClient($livreur, $_POST["idClient"]);
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
    <button><a href="../View/listeLivreur.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idLivreur'])) {
        $livreur = $livreurC->showClient($_POST['idLivreur']);

    ?>
    
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idClient">Id Client:
                        </label>
                    </td>
                    <td><input type="text" name="idClient" id="idClient" value="<?php echo $livreur['id']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstName">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $livreur['fn']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $livreur['em']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $livreur['ps']; ?>" id="address">
                    </td>
                </tr>
              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>