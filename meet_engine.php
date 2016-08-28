<?php
require 'scripts/php/dbconnect.php';
$new_meet = $_POST['newmeet'];
$new_number = $_POST['newnumber'];
echo $new_meet." ".$new_number;
sleep(5);
mysqli_query($dbconnect, "UPDATE `meets` SET `where`= '$new_meet' WHERE `id` = '$new_number'");
header('Location: meets.php');