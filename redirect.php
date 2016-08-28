<?php
session_start();
require 'scripts/php/dbconnect.php';
$user = $_SESSION['user'];
$result = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `username` = '$user'");
$row = mysqli_fetch_array($result);
$today = date("m/d/Y");
$date = mysqli_query($dbconnect, "UPDATE `login` SET `active`='$today' WHERE `username` = '$user'");
$acct_type = $row{'acct_type'};
if($acct_type==1){
    header('Location: main.php?user=1');
}
elseif($acct_type==2){
    header('Location: main.php?user=2');
}
else{
    header('Location: main.php?error=1');
}