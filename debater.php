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
    
    <script src="js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script>
            $(document).ready(function() {
                
                function mess(){
                    
                    $.ajax({
                      url: 'api.php?id=<?php echo $new; ?>',                  //the script to call to get data          
                      data: "",                        //you can insert url argumnets here to pass to api.php
                                                       //for example "id=5&parent=6"
                      dataType: 'json',                //data format      
                      success: function(data)          //on recieve of reply
                      {
                        //var id = data['UserID'];              //get id
                        //var vname = data['Message'];           //get name
                        //--------------------------------------------------------------------
                        // 3) Update html content
                        //--------------------------------------------------------------------
                          //var result;
                          //var obj = $.parseJSON(data);
                          console.log(data);
                          $.each(data, function(){

                              result = "<tr><td><b>"+this['t1a']+"</b></td><td>"+this['t2a']+"</td><td>"+this['t3a']+"</td><td>"+this['t4a']+"</td></tr>"; //Set output element html
                              
                              //result1 = "<tr><td><b>"+this['t1b']+"</b></td><td>"+this['t2b']+"</td><td>"+this['t3b']+"</td><td>"+this['t4b']+"</td></tr>";
                              //result2 = "<tr><td><b>"+this['t1c']+"</b></td><td>"+this['t2c']+"</td><td>"+this['t3c']+"</td><td>"+this['t4c']+"</td></tr>";
                              //result3 = "<tr><td><b>"+this['t1d']+"</b></td><td>"+this['t2d']+"</td><td>"+this['t3d']+"</td><td>"+this['t4d']+"</td></tr>";

                              $("#ta").append(result);
                              console.log(result);
                             // $("#ta").append(result1);
                              //$("#ta").append(result2);
                              //$("#ta").append(result3);
                          });
                      } 
                    });
                }
                setInterval(mess,10000);
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
                        <?php if(mysqli_num_rows($query) == 0){ echo "Debater not found"; } else { ?>
                        <table id="ta" class="table">
                            
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