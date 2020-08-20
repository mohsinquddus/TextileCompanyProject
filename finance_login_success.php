<?php
require_once("FinanceOfficer.php");

$finance= new FinanceOfficer();

$username = $_POST['username'];
$password = $_POST['password'];

$check_login = $finance->login($username,$password);
if($check_login==false)
{
    header("location:index.php?msg=1");
}
else{
    header("location:Finance_Officer.php?username=$username");
}


?>