<?php

include '../Controller/factureC.php';

$error = "";

// create user
$facture = null;

// create an instance of the controller
$factureC = new factureC();
if (
    isset($_POST["id_livraison"]) &&
    isset($_POST["co_client"]) &&
    isset($_POST["co_livreur"]) 
    ) {
    if (
        !empty($_POST['id_livraison']) &&
        !empty($_POST["co_client"]) &&
        !empty($_POST["co_livreur"]) 
    ) {
        $facture = new facture(
            null,
            $_POST['id_livraison'],
            $_POST['co_client'],
            $_POST['co_livreur']
                );
        $factureC->addfacture($facture);
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
    <a href="test.php" class="back_btn"><img src="images/back.png"> Retour</a>
    <h2>Ajouter une facture</h2>
    

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" id="inscription">
            
            <label>Id Livraison</label>
            <input type="int" name="id_livraison">
            <label>Co Client</label>
            <input type="int" name="co_client">
            <label>Co Livreur</label>
            <input type="int" name="co_livreur">
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </form>
    </div>
    <p style="color: red;" id="erreur"></p>

  
</body>

</html>