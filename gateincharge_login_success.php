<?php
require_once("Receptionalist.php");

$recep = new Receptionalist();

$username = $_POST['username'];
$password = $_POST['password'];

$check_login = $recep->login($username,$password);
if($check_login==false)
{
    header("location:index.php?msg=1");
}
else{
    header("location:gateIncharge.php?username=$username");
}


?>