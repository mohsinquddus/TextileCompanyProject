<?php

require_once ("Managerr.php");
$db = new Managerr();

$id = $_GET['id'];
$name = $_GET['name'];
$address = $_GET['address'];
$dilivery = $_GET['ddate'];
$quantity = $_GET['quantity'];
$advance  = $_GET['aamount'];
$total = $_GET['tprice'];
$remaining_amount = $_GET['ramount'];
$order  = $_GET['order'];
$payment  = $_GET['payment'];




if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $customer_name = $_POST['cname'];
    $customer_address = $_POST['caddress'];
    $dilevery_date  = $_POST['ddate'];
    $quantity  = $_POST['quantity'];
    $advance_amount  = $_POST['aamount'];
    $total_price  = $_POST['tprice'];
    $remaining_amount_source = $_POST['ramount'];
    $order_status  = $_POST['orderS'];
    $payment_status  = $_POST['paymentS'];


    $data = array($customer_name,$customer_address,$dilevery_date,$quantity,
        $advance_amount,$total_price,$remaining_amount_source,$order_status,$payment_status,$id);
    $db->updateOrder($data);

    header("location:Manager.php?update=u");

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
            <h2 class="mb-4">Order Detail</h2>
            <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
            <div class="form-group">
                <label for="cname">Customer Name</label>
                <input type="text" class="form-control" id="cname" placeholder="Enter Custoner Name" name="cname" value="<?php echo $name?>">
            </div>
            <div class="form-group">
                <label for="caddress">Customer Address</label>
                <input type="text" class="form-control" id="caddress" placeholder="Enter Customer Address" name="caddress" value="<?php echo $address?>">
            </div>
            <div class="form-group">
                <label for="ddate">Delivery Date</label>
                <input type="date" class="form-control" id="ddate" name="ddate" value="<?php echo $dilivery?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" min="1" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity" value="<?php echo $quantity?>">
            </div>
            <div class="form-group">
                <label for="aamount">Advance Amount</label>
                <input type="text" class="form-control" id="aamount" placeholder="Enter Advance Amount" name="aamount" value="<?php echo $advance?>">
            </div>
            <div class="form-group">
                <label for="tprice">Total Price</label>
                <input type="text" class="form-control" id="tprice" placeholder="Enter Total Price" name="tprice" value="<?php echo $total?>">
            </div>
            <div class="form-group">
                <label for="ramount">Enter Remaining Amount Source</label>
                <select id="ramount" class="form-control" name="ramount" >
                    <option value="<?php echo $remaining_amount?>" selected><?php echo $remaining_amount?></option>
                    <option value="HBL">HBL</option>
                    <option value="Easypaisa">Easypaisa</option>
                    <option value="Jazzcash">Jazzcash</option>
                    <option value="Cash">Cash</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputState">Order Status</label>
                <select id="inputState" class="form-control" name="orderS">
                    <option value="<?php echo $order?>" selected><?php echo $order?></option>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputState">Payment Status</label>
                <select id="inputState" class="form-control" name="paymentS">
                    <option value="<?php echo $payment?>" selected><?php echo $payment?></option>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-dark btn-lg text-white mt-2" id="loginsubmit" style="background-color:midnightblue">Add</button>
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
