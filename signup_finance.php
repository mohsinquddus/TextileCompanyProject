<?php
require_once("FinanceOfficer.php");

$finance = new FinanceOfficer();

$username = $_POST['usernameSignF'];
$password = $_POST['passwordSignF'];
$password2 = $_POST['password2SignF'];

if($password==$password2)
{
    $finance->signup($username,$password);
    header("location:index.php?msg=2");
}
else{
    header("location:index.php?msg=3");
}








?>