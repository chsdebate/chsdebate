<?php
require 'scripts/php/dbconnect.php';
$meet = "t" + $_POST['meet'];
$new_meet = mysqli_real_escape_string($dbconnect,$meet);
mysqli_query($dbconnect, "update `login` set `$new_meet` = 0;");
disconnect();
header('Location: meets.php');
?>