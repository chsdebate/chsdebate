<?php
require 'scripts/php/secure.php';
//session_start();
error_reporting(0);
include 'scripts/php/dbconnect.php';
$user = $_SESSION['user'];
$result = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `username` = '$user'");
$result3 = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `acct_type` = 1");
$result2 = mysqli_query($dbconnect, "SELECT `id`,`where`FROM `meets`");
$result22 = mysqli_query($dbconnect, "SELECT * FROM `meets`");
//$row3 = mysqli_fetch_array($result3);
//$fname = mysqli_fetch_array($result);
//$userid = $row3{'fname'};
//$useridl = $row3{'lname'};
//$result2 = mysqli_query($dbconnect, "SELECT * FROM `meets`");
//$row2 = mysqli_fetch_array($result2);
$row = mysqli_fetch_array($result);
$acct = $row{'acct_type'};
$username = $row{'username'};
$id1 = $row{'id'};
//$id = $row3{'id'};
$t1 = $row{'t1'};
$t2 = $row{'t2'};
$t3 = $row{'t3'};
$t4 = $row{'t4'};
$t5 = $row{'t5'};
$t6 = $row{'t6'};
$t7 = $row{'t7'};
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
                    <div class="col-md-4">
                        <div id="key">
                            <h1><?php echo $username; ?></h1>
                            <p><i>ID: <?php echo $id1; ?></i></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="key2">
                            <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Meet</th>
                                    <th>Number</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row7 = mysqli_fetch_array($result2)){
                                    ?>
                                  <tr>
                                    <td><?php echo $row7{'where'}; ?></td>
                                    <td><?php echo $row7{'id'}; ?></td>
                                  </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>  
                            <th>Name</th>
                            <th>Meets</th>
                                    <!--<th>Attendees</th>-->
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                                while($row5 = mysqli_fetch_array($result3)){
                        ?>
                            <tr>
                                <td><?php echo $row5{'id'}; ?></td>
                                <td><?php echo $row5{'fname'}." ".$row5{'lname'}; ?></td>
                                <td><?php for($i=1;$i<8;$i++){
                            if ($row5{'t'.$i} != 0){
                            //echo $row5{'t'.$i};
                            echo $i;
                            echo " ";
                                }
                            else{}
                        }
                                    
                                    ?></td>
                                
                            </tr>
                        <?php
                                }
                        ?>
                            
                        </tbody>
                      </table>
                        
                    </div>
                </div>
                <?php if ($acct == 2) { ?>
                <div class="row">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Meet Schedule</button></div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Erase Participants</button></div>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ADMINISTRATOR EDIT</h4>
                              </div>
                              <div class="modal-body">
                                <fieldset style="width:50%"><legend>Edit</legend>
                                    <form method="POST" action="meet_engine.php">
                                        <div class="form-group">
                                            <label>New Meet</label>
                                            <input type="text" class="form-control" name="newmeet">
                                        </div>
                                        <div class="form-group">
                                            <label>Number to Replace</label>
                                            <input type="text" class="form-control" name="newnumber">
                                        </div>
                                    <br>
                                        <button type="submit" class="btn btn-success">EDIT</button>
                                    </form>
                                </fieldset>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                <div id="myModal1" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ADMINISTRATOR EDIT</h4>
                              </div>
                              <div class="modal-body">
                                <fieldset style="width:50%"><legend>Edit</legend>
                                    <form method="POST" action="meet_engine2.php">
                                        <div class="form-group">
                                            <label>Meet</label>
                                            <input type="number" class="form-control" name="meet">
                                        </div>
                                    <br>
                                        <button type="submit" class="btn btn-success">EDIT</button>
                                    </form>
                                </fieldset>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                <?php } 
                    else {
                ?>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Your Schedule</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">EDITTING YOUR SCHEDULE</h4>
                              </div>
                              <div class="modal-body">
                                <fieldset style="width:50%"><legend>Edit</legend>
                                    <form method="POST" action="attend_engine.php">
                                        <div class="form-group">
                                            <?php
                                                while($rowcheck = mysqli_fetch_array($result22)){
                                            ?>
                                            <div class="checkbox">
                                              <label><input type="checkbox" name="list[]" value="<?php echo $rowcheck{'id'};?>"><?php echo $rowcheck{'where'};?></label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="radio-inline"><input type="radio" name="optradio" value="1">Attending</label>
                                            <label class="radio-inline"><input type="radio" name="optradio" value="0">Not attending</label>
                                        </div>
                                    <br>
                                        <button type="submit" class="btn btn-success">EDIT</button>
                                    </form>
                                </fieldset>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                <?php } ?>
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