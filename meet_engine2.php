<?php
require 'scripts/php/dbconnect.php';
$meet = "t" . $_POST['meet'];
$meet2 = "t" . $_POST['meet'] . "s";
$new_meet = mysqli_real_escape_string($dbconnect,$meet);
$new = mysqli_real_escape_string($dbconnect,$meet2);
mysqli_query($dbconnect, "update `login` set `$new_meet` = 0;");
mysqli_query($dbconnect, "update `login` set `$new` = 0;");
disconnect();
header('Location: meets.php');
?>