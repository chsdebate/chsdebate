<?php
require 'scripts/php/dbconnect.php';
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
disconnect();
header('Location: index.php');
?>