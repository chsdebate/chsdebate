<?php
require 'scripts/php/dbconnect.php';
$id = mysqli_real_escape_string($dbconnect,$_GET['id']);
$delete = mysqli_query($dbconnect, "DELETE FROM `login` WHERE `id` = '$id'");
disconnect();
header('Location: main.php?user=2');
?>
