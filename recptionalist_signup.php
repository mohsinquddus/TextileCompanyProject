<?php
require_once("Receptionalist.php");

$recep = new Receptionalist();

$username = $_POST['usernameSignR'];
$password = $_POST['passwordSignR'];
$password2 = $_POST['password2SignR'];

if($password==$password2)
{
    $recep->signup($username,$password);
    header("location:index.php?msg=2");
}
else{
    header("location:index.php?msg=3");
}











?>