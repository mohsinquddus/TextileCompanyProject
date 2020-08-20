<?php
require_once("Managerr.php");
$mnger = new Managerr();
$id = $_GET['id'];
$mnger->givePermit($id);
header("location:gateincharge.php");
?>

