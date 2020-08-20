<?php
require_once ("DispatchOfficer.php");
$finance = new DispatchOfficer();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stylesheet/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Dispatch Officer</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: midnightblue;">
    <a class="navbar-brand" href="Finance_Officer.php">Dispatch Officer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--            <li class="nav-item active">-->
            <!--                <a class="nav-link" href="Recep.php">Home <span class="sr-only">(current)</span></a>-->
            <!--            </li>-->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="#">Show Sample</a>-->
            <!--            </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0 float-sm-right" action="logout.php">
            <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Logout</button>
        </form>
    </div>
</nav>
<?php
if(isset($_GET['update'])=='u')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> update sample successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";
}


else if(isset($_GET['adding'])=='a')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong>Your sample data has been inserted successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}
else if(isset($_GET['delete'])=='d')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> Your sample data has been deleted successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}
else if(isset($_GET['msg'])=='f')
{
    echo "
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  <strong>Error !</strong> Insert data in all fields.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}

else if(isset($_GET['select'])=='s')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> Your sample data has been send to manager successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}
else if(isset($_GET['select_F'])=='Disp')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> Your data has been send to Dispatch Officer successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}
else if(isset($_GET['select_D'])=='gate')
{
    echo "
    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Success!</strong> Your data has been send to Gate incharge successfully.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
    ";

}
?>

<div class="jumbotron" style="color: midnightblue;">
    <!--        <div class="float-sm-right display-5" style="font-family:sans-serif;font-size: 35px;font-style: italic"><strong>Username : </strong>--><?php //echo $_GET['username']?><!--</div>-->
    <h1 class="display-4" >Textile Company</h1>
    <p class="lead">Textile to facilitate its customers include the selection of yarn, Dyeing and Knitting according to requirements, recommendations and consultation for both management and emerging
        innovative Products, Sampling, Lab test reports for selected tests, etc</p>
    <hr class="my-4">
    <!--    <p class="lead">-->
    <!--        <a class="btn btn-dark btn-lg" href="#" role="button" data-toggle="modal" data-target="#addSample" style="background-color: midnightblue;">Add Sample</a>-->
    <!--    </p>-->
</div>
<div class="container my-5">
    <table class="table table-striped" id="myTable">
        <thead>
        <tr>
            <th scope="col">OrderID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Delivery Date</th>
            <th scope="col">Quantity</th>
            <th scope="col">Order Status</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $fetching = $finance->loadAllDatafromFinance();
        $i = 0;
        foreach ($fetching as $row) {
            $i = $i + 1;
            echo "<tr>
            <th scope=\"row\">$i</th>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
           
            <td>
            <a href='dispatch_edit.php?id=$row[0]&ddate=$row[3]' class='btn btn-success btn-sm my-1'>Edit</a>
             
             <a href='dispatch_send_detail_to_gate_incharge.php?id=$row[0]&name=$row[1]&address=$row[2]&ddate=$row[3]&quantity=$row[4]&order=$row[5]&payment=$row[6]' class='btn btn-success btn-sm my-1'>Send</a>
             </td>      
        </tr>";

        }
        ?>


        </tbody>
    </table>

</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</body>
</html>