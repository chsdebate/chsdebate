<?php
require 'base.php';
session_start();
$type = $_GET['user'];
include 'scripts/php/dbconnect.php';
$user = $_SESSION['user'];
if(empty($user)){
    header('Location: index.php');
}
else{}
$result = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `username` = '$user'");
$row = mysqli_fetch_array($result);
$acct = $row{'acct_type'};
if($type != $acct){
    header('Location: main.php?user='.$acct);
}
$result2 = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `acct_type` = 1");
$fname = $row{'fname'};
$lname = $row{'lname'};
$id1 = $row{'id'};
?>
<html lang="en">

    <?php base($user); ?>

<body>

    <div id="wrapper">

        <?php include 'scripts/php/nav.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Welcome <?php echo $fname; ?></h1>
                        <p><i>ID: <?php echo $id1; ?></i></p>
                        <?php include 'scripts/php/name.php'; ?>
                        <!--<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
                        <?php
                            if($type==2){
                        ?>
                        <p>Here are the students</p>
                        <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>  
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Member Since</th>
                            <th>Last Active</th>
                            <th>Change?</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                $rowcount = mysqli_num_rows($result2);
                                if($rowcount == 0){
                        ?>
                            <td colspan="5">No Students! (They may have not setup their accounts)</td>
                        <?php
                                }
                                else{
                                while($row2 = mysqli_fetch_array($result2)){
                                    $fname1 = $row2{'fname'};
                                    $lname1 = $row2{'lname'};
                                    $member = $row2{'member'};
                                    $active = $row2{'active'};
                                    $id = $row2{'id'};
                        ?>
                            <tr>
                                <td><a href="debater.php?id=<?php echo $id;?>"><?php echo $id; ?></a></td>
                                <td><?php echo $fname1; ?></td>
                                <td><?php echo $lname1; ?></td>
                                <td><?php echo $member; ?></td>
                                <td><?php echo $active; ?></td>
                                <td><a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
                            </tr>
                        <?php
                                }
                        ?>
                            
                        </tbody>
                      </table>
                        <?php
                            }
                            }
                            //else{}
                        ?>
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