<?php
session_start();
require 'dbconnect.php';
if(isset($_SESSION['user'])){}
else{
    header('Location: index.php?message=1');
}

?>