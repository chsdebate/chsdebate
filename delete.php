<?php
require 'scripts/php/dbconnect.php';
$id = $_GET['id'];
$delete = mysqli_query($dbconnect, "DELETE FROM `login` WHERE `id` = '$id'");
header('Location: main.php?user=2');
?>