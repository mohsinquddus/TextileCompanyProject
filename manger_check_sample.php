
<?php
require_once ("Managerr.php");
$manger = new Managerr();
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
    <title>Manager</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: midnightblue;">
    <a class="navbar-brand" href="Manager.php">Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Manager.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manger_check_sample.php">Check Sample Details</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 float-sm-right" action="logout.php">
            <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Logout</button>
        </form>
    </div>
</nav>
<div class="container my-5">
    <table class="table table-striped" id="myTable">
        <thead>
        <tr>
            <th scope="col">SampleID</th>
            <th scope="col">SampleType</th>
            <th scope="col">SampleCatagory</th>
            <th scope="col">SampleDate</th>
            <th scope="col">SampleImage</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $fetching = $manger->loadAllData();
        $i = 0;
        foreach ($fetching as $row) {
            $i = $i + 1;
            echo "<tr>
           <th scope=\"row\">$i</th>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>
            <img src='upload/$row[4]' alt='Image' width='100' height='100'>
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
