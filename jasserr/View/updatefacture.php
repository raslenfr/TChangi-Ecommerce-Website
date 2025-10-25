<?php

include '../Controller/factureC.php';

$error = "";

// create client
$facture= null;

// create an instance of the controller
$factureC = new factureC();
if (
    isset($_POST["id_facture"]) &&
    isset($_POST["id_livraison"]) &&
    isset($_POST["co_client"]) &&
    isset($_POST["co_livreur"]) 
    ) {
    if (
        !empty($_POST["id_facture"]) &&
        !empty($_POST['id_livraison']) &&
        !empty($_POST["co_client"]) &&
        !empty($_POST["co_livreur"])
    ) {
        $facture= new facture(
            $_POST['id_facture'],
            $_POST['id_livraison'],
            $_POST['co_client'],
            $_POST['co_livreur'] ,
               );
        $factureC->updatefacture($facture, $_POST["id_facture"]);
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
    if (isset($_POST['id_facture'])) {
        $facture = $factureC->showfacture($_POST['id_facture']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_facture">Id Facture:
                        </label>
                    </td>
                    <td><input type="int" name="id_facture" id="id_facture" value="<?php echo $facture[0]['id_facture']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_livraison">Id Livraison:
                        </label>
                    </td>
                    <td><input type="int" name="id_livraison" id="id_livraison" value="<?php echo $facture[0]['id_livraison']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="co_client">Co client:
                        </label>
                    </td>
                    <td><input type="int" name="co_client" id="co_client" value="<?php echo $facture[0]['co_client']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="co_livreur">Co Livreur:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="co_livreur" value="<?php echo $facture[0]['co_livreur']; ?>" id="co_livreur">
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