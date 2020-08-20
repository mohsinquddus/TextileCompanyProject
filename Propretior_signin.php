<?php
if(isset($_POST['submittt'])){
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM `login` WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
        $_SESSION['username'] = $row['username']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: Propretior.php"); // Modify to go to the page you would like 
        exit; 
}
else {
echo "<script>alert('Wrong Username or Password.');</script>";
}
}
?>