<?php
require_once ("Managerr.php");
$db = new Managerr();
$id = $_GET['id'];
$db->deletedOrder($id);

header("location:Propretior.php?delete=d");


?>
