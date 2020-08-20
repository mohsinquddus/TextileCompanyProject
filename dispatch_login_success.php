<?php
require_once("DispatchOfficer.php");

$diapatch= new DispatchOfficer();

$username = $_POST['username'];
$password = $_POST['password'];

$check_login = $diapatch->login($username,$password);
if($check_login==false)
{
    header("location:index.php?msg=1");
}
else{
    header("location:Dispatch_Officer.php?username=$username");
}


?>