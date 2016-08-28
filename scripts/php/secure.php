<?php
session_start();
require 'scripts/php/dbconnect.php';
if(isset($_SESSION['user'])){}
else{
    header('Location: index.php?message=1');
}

?>