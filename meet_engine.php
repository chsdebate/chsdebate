<?php
require 'scripts/php/dbconnect.php';
$new_meet = mysqli_real_escape_string($dbconnect,$_POST['newmeet']);
$new_number = mysqli_real_escape_string($dbconnect,$_POST['newnumber']);
echo $new_meet." ".$new_number;
sleep(5);
mysqli_query($dbconnect, "UPDATE `meets` SET `where`= '$new_meet' WHERE `id` = '$new_number'");
disconnect();
header('Location: meets.php');
?>