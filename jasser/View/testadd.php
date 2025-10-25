<?php
session_start();

include '../Controller/livrC.php';

$error = "";

// create user
$livr = null;

// create an instance of the controller
$livrC = new livrC();
if (
    isset($_POST["id_client"]) &&
    isset($_POST["id_livreur"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["dob"])&&
    isset($_POST["id_commande"]) 
) {
    if (
        !empty($_POST["id_commande"]) &&
        !empty($_POST["id_livreur"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["dob"])&&
        !empty($_POST["id_commande"]) 
    ) {
        $livr = new livr(
            null, 
       $_POST["id_client"],
       $_POST["id_livreur"],    
          $_POST["adresse"],
       new DateTime($_POST['dob']),
       $_POST["id_commande"],
        
        );
        $livrC->addlivr($livr);
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
    <h2>Ajouter une livraison</h2>
    

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" id="inscription">
            
            <label>Id Client</label>
            <input type="int" name="id_client">
            <label>Id Livreur</label>
            <input type="int" name="id_livreur">
            <label>adresse</label>
            <input type="text" name="adresse">
            <label>date de livraison</label>
            <input type="date" name="dob" id="dob">
            <label>Id Commmande</label>
            <input type="int" name="id_commande">
            <input type="submit" value="Save" class="btn-submit">
            <input type="reset" value="Reset">
        </form>
    </div>
    <p style="color: red;" id="erreur"></p>

  
</body>

</html>