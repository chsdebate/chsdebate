<?php
require 'scripts/php/dbconnect.php';
$new_meet = mysqli_real_escape_string($dbconnect,$_POST['meet']);
sleep(5);
mysqli_query($dbconnect, "UPDATE `meets` SET `where`= '$new_meet' WHERE `id` = '$new_number'");
$meet = "t" + $new_meet;
mysqli_query($dbconnect, "update `login` set `$meet` = 0;");
header('Location: meets.php');
?>