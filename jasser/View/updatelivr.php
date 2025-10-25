<?php

include '../Controller/livrC.php';

$error = "";

// create client
$livr = null;

// create an instance of the controller
$livrC = new livrC();
if (
    isset($_POST["id_livraison"]) &&
    isset($_POST["id_client"]) &&
    isset($_POST["id_livreur"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["dob"])&&
    isset($_POST["id_commande"])

) {
    if (
        !empty($_POST["id_livraison"]) &&
        !empty($_POST['id_client']) &&
        !empty($_POST["id_livreur"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["dob"])&&
        !empty($_POST["id_commande"])
)
 {
        $livr = new livr(
            $_POST['id_livraison'],
            $_POST['id_client'],
            $_POST['id_livreur'],
            $_POST['adresse'],
            new DateTime($_POST['dob']),
            $_POST['id_commande']
        );
        $livrC->updatelivr($livr, $_POST["id_livraison"]);
        header('Location:test.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="test.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_livraison'])) {
        $livr = $livrC->showlivr($_POST['id_livraison']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_livraison">Id livraison:
                        </label>
                    </td>
                    <td><input type="text" name="id_livraison" id="id_livraison" value="<?php echo $livr[0]['id_livraison']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_client">Id Client:
                        </label>
                    </td>
                    <td><input type="text" name="id_client" id="id_client" value="<?php echo $livr[0]['id_client']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_livreur">Id Livreur:
                        </label>
                    </td>
                    <td><input type="text" name="id_livreur" id="id_livreur" value="<?php echo $livr[0]['id_livreur']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse"> adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse" value="<?php echo $livr[0]['adresse']; ?>" id="adresse">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob"> dob:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob" value="<?php echo $livr[0]['dob']; ?>">
                    </td>
                </tr>
                <tr>
                <td>
                        <label for="id_commande">Id Commande:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_commande" value="<?php echo $livr[0]['id_commande']; ?>" id="id_commande">
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