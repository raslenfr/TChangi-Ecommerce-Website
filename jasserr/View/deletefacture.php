<?php
include '../Controller/factureC.php';
$factureC = new factureC();
$factureC->deletefacture($_GET["id_facture"]);
header('Location:test.php');
