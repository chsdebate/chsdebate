<?php
session_start();
if(isset($_SESSION['user'])){}
else{
    header('Location: index.php?message=1');
}

?>