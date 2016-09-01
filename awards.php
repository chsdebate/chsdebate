<?php
error_reporting(0);
require 'scripts/php/dbconnect.php';
require 'base.php';
?>
<html lang="en">

<?php base("Awards"); ?>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Awards</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Kyle Hooten and Austin McCoy advanced to the Final JV Championship Round of the Minnesota State Debate Tournament.</li>
                            <li>Kyle Hooten and Austin McCoy scored 2nd Place out of 53 JV teams at the Minnesota State Debate Tournament.</li>
                            <li>Kyle Hooten individually earned the 1st Place JV Speaker Award out of 106 debaters at the Minnesota State Debate Tournament.</li>
                            <li>Austin McCoy individually earned the 3rd Place JV Speaker Award out of 106 debaters at the Minnesota State Debate Tournament. 
</li>
                            <li>Roshini Asirvatham earned the 9th Place Varsity Speaker Award out of 48 debaters at the Minnesota State Debate Tournament.</li>
                            <li>Anjali Goradia and Rhea Sanwal advanced to Octafinals in the Minnesota State Debate Tournament.</li>
                            <li>Anjali Goradia individually earned the 6th Place Novice Speaker Award out of 132 debaters at the Minnesota State Tournament.</li>
                        </ul>
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
