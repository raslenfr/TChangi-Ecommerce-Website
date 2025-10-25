<?php

include '../Controller/ClientC.php';

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
        header('Location:listeClient.php');
    } else
        $error = "Missing information";
}



?>


