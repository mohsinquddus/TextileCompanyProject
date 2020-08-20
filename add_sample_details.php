<?php
require_once ("Receptionalist.php");
$recep = new Receptionalist();

$stname = $_POST['stname'];
$scname = $_POST['scname'];
$sdname = $_POST['sdname'];
$file = $_FILES['simage'];


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];


$dest = 'upload/'.$filename;
move_uploaded_file($filepath,$dest);

if($stname!="" && $scname!="" && $sdname!="" && $file!="")
{
    $data = array($stname,$scname,$sdname,$dest);
    $recep->addSample($data);
    header("location:Recep.php?adding=a");
}
else{
    header("location:Recep.php?msg=f");
}


?>