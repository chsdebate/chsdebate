<?php
require 'scripts/php/dbconnect.php';
/*$meet = "t" . $_POST['meet'];
$meet2 = "t" . $_POST['meet'] . "s";
$new_meet = mysqli_real_escape_string($dbconnect,$meet);
$new = mysqli_real_escape_string($dbconnect,$meet2);
mysqli_query($dbconnect, "update `login` set `$new_meet` = 0;");
mysqli_query($dbconnect, "update `login` set `$new` = 0;");*/

for($i=1;$i<8;$i++){
    $string = "t".$i."a";
    mysqli_query($dbconnect, "ALTER TABLE `login` ADD `$string` int(2);");
    $string1 = "t".$i."b";
    mysqli_query($dbconnect, "ALTER TABLE `login` ADD `$string1` int(2);");
    $string2 = "t".$i."c";
    mysqli_query($dbconnect, "ALTER TABLE `login` ADD `$string2` int(2);");
    $string3 = "t".$i."d";
    mysqli_query($dbconnect, "ALTER TABLE `login` ADD `$string3` int(2);");
}

disconnect();
header('Location: meets.php');
?>