<?php
session_start();
require 'scripts/php/dbconnect.php';
$fname = mysqli_real_escape_string($dbconnect,$_POST['fname']);
$lname = mysqli_real_escape_string($dbconnect,$_POST['lname']);
$user = $_SESSION['user'];
echo $fname;
$resul = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `username` = '$user'");
$row = mysqli_fetch_array($resul);
$type = $row{'acct_type'};
$result = mysqli_query($dbconnect, "UPDATE `login` SET `fname`='$fname',`lname`='$lname' WHERE `username` = '$user'");
disconnect();
header('Location: main.php?user='.$type);
?>