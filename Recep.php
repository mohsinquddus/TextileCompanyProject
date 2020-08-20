<?php
require_once ("Receptionalist.php");
$recep = new Receptionalist();
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
    <title>Receptionalist</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: midnightblue;">
    <a class="navbar-brand" href="#">Receptionalist</a>
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
?>

    <div class="jumbotron" style="color: midnightblue;">
<!--        <div class="float-sm-right display-5" style="font-family:sans-serif;font-size: 35px;font-style: italic"><strong>Username : </strong>--><?php //echo $_GET['username']?><!--</div>-->
        <h1 class="display-4" >Textile Company</h1>
        <p class="lead">Textile to facilitate its customers include the selection of yarn, Dyeing and Knitting according to requirements, recommendations and consultation for both management and emerging
            innovative Products, Sampling, Lab test reports for selected tests, etc</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-dark btn-lg" href="#" role="button" data-toggle="modal" data-target="#addSample" style="background-color: midnightblue;">Add Sample</a>
        </p>
    </div>
<div class="container my-5">
    <table class="table table-striped" id="myTable">
        <thead>
        <tr>
            <th scope="col">SampleID</th>
            <th scope="col">SampleType</th>
            <th scope="col">SampleCatagory</th>
            <th scope="col">SampleDate</th>
            <th scope="col">SampleImage</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $fetching = $recep->loadAllData();
        $i = 0;
        foreach ($fetching as $row) {
            $i = $i + 1;
            echo "<tr>
            <th scope=\"row\">$i</th>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>
            <img src='$row[4]' alt='Image' width='100' height='100'>
            </td>
            <td><a href='sample_edit.php?id=$row[0]&stype=$row[1]&scatagory=$row[2]&sdate=$row[3]&simage=$row[4]' class='btn btn-success btn-sm'>Edit</a>
             <a href='delete.php?id=$row[0]' onclick=\"return confirm('Are you sure you delete this record?')\" class='btn btn-danger btn-sm delete'>Delete</a>
             <a href='sample_select.php?id=$row[0]&stype=$row[1]&scatagory=$row[2]&sdate=$row[3]&simage=$row[4]' class='btn btn-success btn-sm'>Select</a>
             </td>      
        </tr>";

        }
        ?>

        </tbody>
    </table>

</div>


<!-- Add Sample Details -->
<div class="modal fade" id="addSample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Add Sample Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add_sample_details.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="stname">Sample Type</label>
                        <input type="text" class="form-control" id="stname" placeholder="Enter Sample Type Name" name="stname">
                    </div>
                    <div class="form-group">
                        <label for="scname">Sample Catagory</label>
                        <input type="text" class="form-control" id="scname" placeholder="Enter Catagory Name" name="scname">
                    </div>
                    <div class="form-group">
                        <label for="sdname">Sample Date</label>
                        <input type="date" class="form-control" id="sdname" name="sdname">
                    </div>
                    <div class="form-group">
                        <label for="simage">Sample Image</label>
                        <input type="file" class="form-control" id="simage" name="simage">
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg text-white mt-2" id="loginsubmit" style="background-color:midnightblue">Add</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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