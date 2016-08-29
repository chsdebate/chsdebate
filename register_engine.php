<?php
$today = date("Y");
require 'scripts/php/dbconnect.php';
$username = $_POST['userreg'];
$password = $_POST['passreg'];
$password_confirmation = $_POST['passconreg'];
$salt = mt_rand();
echo $salt."<br>";
$pass = hash('sha256', $password);
$total = hash('sha256', $salt . $pass);
echo $pass."<br>";
echo $total;
$user_check_query = "SELECT `username` FROM `login` WHERE `username` = '$username';";
$user_check = mysqli_query($dbconnect,$user_check_query);
$rowcount = mysqli_num_rows($user_check);

if($rowcount == 1){
    header('Location: login.php?error=4');
}
else {
    mysqli_query($dbconnect, "INSERT INTO `login`(`username`, `password`, `salt`, `total_pass`, `acct_type`, `member`) VALUES ('$username','$pass','$salt','$total',1,'$today');");
    header('Location: login.php?error=0');
}
?>