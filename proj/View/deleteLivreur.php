<?php
include '../Controller/LivreurC.php';
$livreurC = new LivreurC();
$livreurC->deleteClient($_GET["idLivreur"]);
header('Location:listeLivreur.php');
