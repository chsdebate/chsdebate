<?php
error_reporting(0);
require 'scripts/php/dbconnect.php';
require 'base.php';
?>
<html lang="en">

<?php base("About Us"); ?>

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
                        <h2>How It Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Debate tournaments are held each Saturday from October to December, with a break on MEA weekend and Thanksgiving weekend. Buses typically depart at 6 AM and return to Century at 6 PM. The State Debate Tournament, held in Minneapolis, is the first weekend of December.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Students debate with a partner in 4 rounds per tournament, each round lasting approximately 1 hour. They defend the resolution (argue the affirmative) in two rounds, and negate the resolution (argue the negative) in two rounds. Judges score each round, assigning points for effective argumentation, adherence to procedure, and speaker performance. Team and individual rankings are established, and winners are recognized at an awards ceremony at the conclusion of each tournament.</p>
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
