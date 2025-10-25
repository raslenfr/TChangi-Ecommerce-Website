<?php
include '../Controller/livrC.php';
$livrC = new livrC();
$livrC->deletelivr($_GET["id_livraison"]);
header('Location:test.php');

