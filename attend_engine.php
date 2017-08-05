<?php
session_start();
require 'scripts/php/dbconnect.php';
$user = $_SESSION['user'];
$attending = mysqli_real_escape_string($dbconnect,$_POST['optradio']);
//sleep(5);
mysqli_query($dbconnect, "UPDATE `login` SET `t1`=[value-11],`t2`=[value-12],`t3`=[value-13],`t4`=[value-14],`t5`=[value-15],`t6`=[value-16],`t7`=[value-17] WHERE `username` = '$user''");
foreach($_POST['list'] as $selected) {
    echo "<p>".$selected ."</p>";
    $tselected = "t".$selected;
    echo $tselected;
    if ($attending ==1){
        mysqli_query($dbconnect, "UPDATE `login` SET `$tselected`= 1 WHERE `username` = '$user'");
    }
    else {
        mysqli_query($dbconnect, "UPDATE `login` SET `$tselected`= 0 WHERE `username` = '$user'");
    }
}
disconnect();
header('Location: meets.php');
?>
