<?php
require 'scripts/php/dbconnect.php';
$new_meet = mysqli_real_escape_string($dbconnect,$_POST['meet']);
sleep(5);
$meet = "t" + $new_meet;
mysqli_query($dbconnect, "update `login` set `$meet` = 0;");
disconnect();
header('Location: meets.php');
?>