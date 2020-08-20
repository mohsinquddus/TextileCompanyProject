<?php
require_once("Propretior.php");

$recep = new Managerr();

$username = $_POST['usernameSignP'];
$password = $_POST['passwordSignP'];
$password2 = $_POST['password2SignP'];

if($password==$password2)
{
    $recep->signup($username,$password);
}
else{
    header("location:index.php?msg=3");
}








?>