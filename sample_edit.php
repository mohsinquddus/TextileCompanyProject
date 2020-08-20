<?php

require_once ("Receptionalist.php");
$db = new Receptionalist();

$id = $_GET['id'];
$stype = $_GET['stype'];
$scatagory = $_GET['scatagory'];
$sdate = $_GET['sdate'];
//$simage = $_GET['simage'];

if($_SERVER["REQUEST_METHOD"]=="POST")
{



    $file = $_FILES['simage'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    $dest = 'upload/'.$filename;
    move_uploaded_file($filepath,$dest);



    $data = array($_POST['stname'],$_POST['scname'],$_POST['sdname'],$dest,$id);
    $db->updatSample($data);

    header("location:Recep.php?update=u");

}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Receptionalist</title>


</head>
<body>
<div class="jumbotron">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="mb-4">Textile Company</h2>
            <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
            <div class="form-group">
                <label for="stname">Sample Type</label>
                <input type="text" class="form-control" id="stname" placeholder="Enter Sample Type Name" name="stname" value=<?php echo $stype?>>
            </div>
            <div class="form-group">
                <label for="scname">Sample Catagory</label>
                <input type="text" class="form-control" id="scname" placeholder="Enter Catagory Name" name="scname" value=<?php echo $scatagory?>>
            </div>
            <div class="form-group">
                <label for="sdname">Sample Date</label>
                <input type="date" class="form-control" id="sdname" name="sdname" value=<?php echo $sdate?>>
            </div>
            <div class="form-group">
                <label for="simage">Sample Image</label>
                <input type="file" class="form-control" id="simage" name="simage">
            </div>

            <button type="submit" class="btn btn-dark btn-lg text-white mt-2" id="loginsubmit" style="background-color:midnightblue">Update</button>
        </form>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
