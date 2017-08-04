<?php
error_reporting(0);
require 'scripts/php/dbconnect.php';
require 'base.php';
$message = $_GET['message'];
?>
<html lang="en">

<?php base("Home"); ?>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        if($message == 1){
                            echo "<h1><font color='red'>Please Log In</font></h1>";
                        }
                        ?>
                        <h1><font size="18">Century Debate Team</font></h1>
                        <br>
                        <p>Welcome to the Century Debate Team's website!</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu: Affirmitive or Negative?</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img id="image" src="img/members.jpg" class="img-rounded" alt="Debate Team">
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
