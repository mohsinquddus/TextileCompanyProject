<?php

$login_failed = false;
$signup = false;
$erro = false;
if(isset($_GET['msg']))
{
    if($_GET['msg']==1)
    {
        $login_failed = true;
    }
    if($_GET['msg']==2)
    {
        $signup = true;
    }
    if($_GET['msg']==3)
    {
        $erro = true;
    }

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
    <link rel="stylesheet" href="stylesheet/style.css">
    <title>TextileMarket</title>
</head>
<body>
<nav class="navbar navbar-dark" style="background-color: midnightblue;">
    <a class="navbar-brand" href="#">Textile Market</a>
</nav>

<?php
if($login_failed)
{
    echo "
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  <strong>Error!</strong> You should check your username and passward.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";
}
else{
    if($signup)
    {
        echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> You Signup Successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";
    }
    if($erro)
    {
        echo "
    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  <strong>Error!</strong> Your passward and retype password should match and password length always greater than 5.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";
    }
}



?>
<!--<hr>-->
<div class="container my-3">
    <div class="row">
        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/recep.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Receptionalist</h5>
                <p class="card-text">A receptionist is an employee taking an office or administrative support position</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModalRecep">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModalRecep">SignUp</button>
                </div>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/manager.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Manager</h5>
                <p class="card-text">A manager is a person who is responsible for a part of a business or organization, this may include supervising and managing a group of people.</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModalManager">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModalManager">SignUp</button>
                </div>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/finance.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Finance Officer</h5>
                <p class="card-text">The role of the Finance Officer involves providing financial and administrative support to colleagues, clients and stakeholders of the business.</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModalfinance">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModalfinance">SignUp</button>
                </div>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/dispatch.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Dispatch Officer</h5>
                <p class="card-text">Dispatch officers are responsible for bringing necessary assistance or materials to people in need.
                    Sometimes they help transport passengers to their destinations.</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModaldispatch">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModaldispatch">SignUp</button>
                </div>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/gate.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Gate Incharge</h5>
                <p class="card-text">Inspects outgoing traffic to prevent unauthorized removal of company property or products.</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModalGate">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModalGate">SignUp</button>
                </div>
            </div>
        </div>

        <div class="card mx-auto my-2 p-2" style="width: 18rem;">
            <img width="23px" height="245px" src="images/prop.png" class="card-img-top" alt="..." style="background-color: white">
            <div class="card-body">
                <h5 class="card-title">Proprieter</h5>
                <p class="card-text">A proprietor is an individual who owns a business establishment or sole proprietorship.
                    This person has legal use of the assets and their operations.</p>
                <div>
                    <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#loginModalpropretior">Login</button>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#signupModalpropretior">SignUp</button>
                </div>
            </div>
        </div>



    </div>

</div>

<?php
require_once ("login_sign_modal.php");
?>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
