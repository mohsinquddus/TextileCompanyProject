<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stylesheet/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TextileMarket</title>
</head>
<body>
<!-- Login Modal for Gate Incharge -->
<div class="modal fade" id="loginModalGate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="gateincharge_login_success.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModalGate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="gateIncharge_signup.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter your Name" name="usernameSignR">
                    </div>
                    <div class="form-group">
                        <label for="password">Choose a password</label>
                        <input type="password" class="form-control" id="password" placeholder="Choose a password" name="passwordSignR">
                    </div>
                    <div class="form-group">
                        <label for="password2">Retype a password</label>
                        <input type="password" class="form-control" id="password2" placeholder="Retype your password" name="password2SignR">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal for receptionlist -->
<div class="modal fade" id="loginModalRecep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="recep_login_success.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModalRecep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="recptionalist_signup.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter your Name" name="usernameSignR">
                    </div>
                    <div class="form-group">
                        <label for="password">Choose a password</label>
                        <input type="password" class="form-control" id="password" placeholder="Choose a password" name="passwordSignR">
                    </div>
                    <div class="form-group">
                        <label for="password2">Retype a password</label>
                        <input type="password" class="form-control" id="password2" placeholder="Retype your password" name="password2SignR">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Login Modal for manager -->
<div class="modal fade" id="loginModalManager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="Manager.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModalManager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="manager_signup.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="usernameSign">Username</label>
                        <input type="text" class="form-control" id="usernameSign" placeholder="Enter your Name" name="usernameSignM">
                    </div>
                    <div class="form-group">
                        <label for="passwordSign">Choose a password</label>
                        <input type="password" class="form-control" id="passwordSign" placeholder="Choose a password" name="passwordSignM">
                    </div>
                    <div class="form-group">
                        <label for="password2Sign">Retype a password</label>
                        <input type="password" class="form-control" id="password2Sign" placeholder="Retype your password" name="password2SignM">
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal for propretior -->
<div class="modal fade" id="loginModalpropretior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="Propretior.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" name="submittt" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModalpropretior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="Propretior_signup.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="usernameSign">Username</label>
                        <input type="text" class="form-control" id="usernameSign" placeholder="Enter your Name" name="usernameSignM">
                    </div>
                    <div class="form-group">
                        <label for="passwordSign">Choose a password</label>
                        <input type="password" class="form-control" id="passwordSign" placeholder="Choose a password" pattern="{8}" title="Not more than Eight" name="passwordSignP" required>
                    </div>
                    <div class="form-group">
                        <label for="password2Sign">Retype a password</label>
                        <input type="password" class="form-control" id="password2Sign" placeholder="Retype your password"  pattern="{8}" title="Not more than Eight" name="password2SignP" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal for Finance Officer -->
<div class="modal fade" id="loginModalfinance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="finance_login_success.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" name="submittt" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModalfinance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="signup_finance.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="usernameSign">Username</label>
                        <input type="text" class="form-control" id="usernameSign" placeholder="Enter your Name" name="usernameSignF">
                    </div>
                    <div class="form-group">
                        <label for="passwordSign">Choose a password</label>
                        <input type="password" class="form-control" id="passwordSign" placeholder="Choose a password"  name="passwordSignF" required>
                    </div>
                    <div class="form-group">
                        <label for="password2Sign">Retype a password</label>
                        <input type="password" class="form-control" id="password2Sign" placeholder="Retype your password"  name="password2SignF" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal for Dispatch Officer -->
<div class="modal fade" id="loginModaldispatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal1">Login using your credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="dispatch_login_success.php" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="lusername">Username</label>
                        <input type="text" class="form-control" id="luname" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="lpassword" placeholder="Enter your password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-dark text-white mt-2" id="loginsubmit" name="submittt" style="background-color: rgb(23, 162, 184)">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signupModaldispatch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal1">SignUp for an account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="contact" method="post" action="diapatch_signup.php"><input type="hidden" name="csrfmiddlewaretoken" value="U9UXTmOamQichyZrfoZ5hQD2tuEEUMsFpeTo1aTVEY3t83OgJx1uDjueQFvRBngr">
                    <div class="form-group">
                        <label for="usernameSign">Username</label>
                        <input type="text" class="form-control" id="usernameSign" placeholder="Enter your Name" name="usernameSignD">
                    </div>
                    <div class="form-group">
                        <label for="passwordSign">Choose a password</label>
                        <input type="password" class="form-control" id="passwordSign" placeholder="Choose a password"  name="passwordSignD" required>
                    </div>
                    <div class="form-group">
                        <label for="password2Sign">Retype a password</label>
                        <input type="password" class="form-control" id="password2Sign" placeholder="Retype your password"  name="password2SignD" required>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2" style="background-color: rgb(23, 162, 184)">SignUp</button>
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
</body>
</html>
