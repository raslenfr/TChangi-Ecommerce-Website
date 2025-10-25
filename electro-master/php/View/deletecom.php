<?php
include '../Controller/commentairep.php';
$comp = new comp();
$comp->deletecom($_POST["id_com"]);
header('Location:Forum.php');

