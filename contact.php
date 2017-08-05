<?php
error_reporting(0);
require 'scripts/php/dbconnect.php';
require 'base.php';
$message = $_GET['message'];
?>
<html lang="en">

<?php base("Contact Us"); ?>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        Mr. Chris Deufel &ndash; Debate Coach
                    </div>
                    <div class="col-md-6">
                        Mrs. Hooten, Mrs. McCoy, and Mrs. Nee &ndash; Debate Advisors
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        Kyle Hooten &ndash; Team Captain
                    </div>
                    <div class="col-md-6">
                        Connor Nee &ndash; Team Captain
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-md-12">
                        <button class="btn btn-primary" href="mailto:centurypanthersdebate@gmail.com">Contact Us</button>
                    </div>
                </div>
                <div class="row">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu: Affirmitive or Negative?</a>
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
<?php disconnect(); ?>