<?php
session_start();
require 'scripts/php/dbconnect.php';
$username = $_POST['user'];
$password = $_POST['pass'];
$result = mysqli_query($dbconnect, "SELECT * FROM `login` WHERE `username` = '$username'");
if (isset($result)){}
else{
    header('Location: login.php?error=2');
}
$row = mysqli_fetch_array($result);
$user = $row{'username'};
$pass = $row{'password'};
$salt = $row{'salt'};
$total_password = $row{'total_pass'};
$work = hash('sha256', $salt . $pass);
$hash_pass = hash('sha256', $password);
if(empty($user)){
    header('Location: login.php?error=1');
}
elseif(empty($password)){
    header('Location: login.php?error=1');
}
else{
    if($hash_pass == $pass){
        if ($work == $total_password){
            $_SESSION['user'] = $username;
            header('Location: redirect.php');
        }
        else{
            header('Location: login.php?error=5');
        }
    }
    else{
        header('Location: login.php?error=2');
    }
}
?>