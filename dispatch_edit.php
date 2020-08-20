<?php

require_once ("DispatchOfficer.php");
$db = new DispatchOfficer();

$id = $_GET['id'];
$dilivery = $_GET['ddate'];


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $dilevery_date  = $_POST['ddate'];



    $data = array($dilevery_date,$id);
    $data1 = array($dilevery_date,$id);
    $data2 = array($dilevery_date,$id);
    $db->updateDispatch($data);
    $db->updatecustomer($data1);
    $db->updatefinance($data2);

    header("location:Dispatch_Officer.php?update=u");

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
    <title>Dispatch Officer</title>


</head>
<body>
<div class="jumbotron">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="ddate">Delivery Date</label>
                <input type="date" class="form-control" id="ddate" name="ddate" value="<?php echo $dilivery?>">
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
