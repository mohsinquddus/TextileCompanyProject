<?php
require_once ("Receptionalist.php");
$db = new Receptionalist();
$id = $_GET['id'];
$db->deletedSample($id);

header("location:Recep.php?delete=d");
?>
