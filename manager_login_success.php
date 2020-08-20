<?php
require_once("Managerr.php");

$recep = new Managerr();

$username = $_POST['username'];
$password = $_POST['password'];

$check_login = $recep->login($username,$password);

if($check_login==false)
{
    header("location:index.php?msg=1");
}
else
{
    header("location:Manager.php?username=$username");
}
?>