<?php
require_once ("Managerr.php");
$manger = new Managerr();

$customer_name = $_POST['cname'];
$customer_address = $_POST['caddress'];
$dilevery_date  = $_POST['ddate'];
$quantity  = $_POST['quantity'];
$advance_amount  = $_POST['aamount'];
$total_price  = $_POST['tprice'];
$remaining_amount_source = $_POST['ramount'];
$order_status  = $_POST['orderS'];
$payment_status  = $_POST['paymentS'];

if($customer_name!="" && $customer_address!="" && $order_status!="" &&
$payment_status!=""&& $remaining_amount_source!=""&&$advance_amount!=""&&$quantity!=""&&$total_price!="")
{



    $data = array($customer_name,$customer_address,$dilevery_date,$quantity,
        $advance_amount,$total_price,$remaining_amount_source,$order_status,$payment_status);

    $manger->addCustomer($data);
    header("location:Manager.php?adding=a");
}
else{
    header("location:Manager.php?msg=f");
}


?>