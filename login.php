<?php
//error_reporting(0);
session_start();
require 'scripts/php/dbconnect.php';
require 'base.php';
if (isset($_GET['error'])){
    $error = $_GET['error'];
}
?>
<html lang="en">

<?php base("Login"); ?>

<script src="js/jquery.js"></script>
<script>
$(document).ready(function () {
    $('#passreg').popover();
});
</script>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if (isset($error)){
                            if($error == 1){
                        ?>
                                        <strong>Password Confirmation Failed</strong>
                        <?php
                        }
<<<<<<< HEAD
                            elseif($error == 2){
                        ?>
                                        <strong>Username not found</strong>
                        <?php
                            }
                            elseif($error == 3){
                        ?>
                                        <strong>Password does not match record</strong>
                        <?php
                            }
                            elseif($error == 4){
                        ?>
                                        <strong>Username on Record</strong>
                        <?php
                            }
                            elseif($error == 0){
                        ?>
                                        <strong>SUCCESS!!!</strong>
                        <?php
                            }
                            elseif($error == 5){
                        ?>
                                        <strong>Couldn't add some salt to that pepper</strong>
                        <?php
                            }
                            else{}
    }
=======
                        elseif($error == 6){
                    ?>
                                    <strong>PHP Error Catch: Empty Field</strong>
                    <?php        
                        }
>>>>>>> refs/remotes/origin/master
                        else{}
                        ?>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="Sign-In">
                                <fieldset><legend>Please Login</legend>
                                <form method="POST" action="login_engine.php">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="user">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="pass">
                                    </div>
                                <br>
                                    <button type="submit" class="btn btn-success">Log-In</button>
                                </form>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="register">
                                <fieldset><legend>Please Register if not already</legend>
                                <form name="register" method="POST" action="register_engine.php" onsubmit="return validateForm()">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="userreg" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="passreg" name="passreg" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Password Requirements" data-content="Must contain at least one uppercase, lowercase, number/special character Minimum 8 characters" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="passconreg" required>
                                    </div>
                                <br>
                                    <button type="submit" class="btn btn-info">Register</button>
                                </form>
                                </fieldset>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu: Affirmitive or Negative?</a>
                </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>