<?php
include '../Controller/publicationp.php';
$publicationp = new publicationp();
$publicationp->likedes($_POST["id_pub"]);
//header('Location:Forum.php');
