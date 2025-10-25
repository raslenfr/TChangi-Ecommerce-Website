<?php
include '../Controller/publicationp.php';
$publicationp = new publicationp();
$publicationp->deletepub($_POST["id_pub"]);
header('Location:Forum.php');
