<?php
require 'scripts/php/secure.php';
//session_start();
//error_reporting(0);
include 'scripts/php/dbconnect.php';
$user = $_SESSION['user'];
$id = $_GET['id'];
$new = mysqli_real_escape_string($dbconnect,$id);
$query = mysqli_query($dbconnect, "select * from `login` where `id` = $new;");
//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$row = mysqli_fetch_array($query);
echo "<h1>" . $row['t1a'] . "</h1>";
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Century Debate Team - <?php echo $user; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(mysqli_num_rows($query) == 0){ echo "Debater not found"; } else { ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>Tournament 1</td>
                                    <td>Tournament 2</td>
                                    <td>Tournament 3</td>
                                    <td>Tournament 4</td>
                                    <td>Tournament 5</td>
                                    <td>Tournament 6</td>
                                    <td>Tournament 7</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Round 1</td>
                                    <?php 
                                        for($i=1;$i<8;$i++){
                                            $r1 = "'t".$i."a'";
                                            echo "<td>".$row{$r1}."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Round 2</td>
                                    <?php 
                                        for($i=1;$i<8;$i++){
                                            $r2 = "t".$i."b";
                                            echo "<td>".$row[$r2]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Round 3</td>
                                    <?php 
                                        for($i=1;$i<8;$i++){
                                            $r3 = "t".$i."c";
                                            echo "<td>".$row[$r3]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Round 4</td>
                                    <?php 
                                        for($i=1;$i<8;$i++){
                                            $r4 = "t".$i."d";
                                            echo "<td>".$row[$r4]."</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Average</td>
                                    <?php
                                        for($i=1;$i<8;$i++){
                                            $r1 = "t".$i."a";
                                            $r2 = "t".$i."b";
                                            $r3 = "t".$i."c";
                                            $r4 = "t".$i."d";
                                            $sum = $row[$r1]+$row[$r2]+$row[$r3]+$row[$r4];
                                            $average = $sum/4;
                                            echo "<td>".$average."</td>";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                        <?php } ?>
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
    <script src="js/popover.js"></script>

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