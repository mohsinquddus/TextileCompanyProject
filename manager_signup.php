<?php
require_once("Managerr.php");

$recep = new Managerr();

$username = $_POST['usernameSignM'];
$password = $_POST['passwordSignM'];
$password2 = $_POST['password2SignM'];

if($password==$password2)
{
    $recep->signup($username,$password);
    header("location:index.php?msg=2");
}
else{
    header("location:index.php?msg=3");
}








?>