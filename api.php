<?php
$id = $_GET['id'];
echo $id;
if(!$id){
    echo "none";
}
require 'scripts/php/dbconnect.php';
require 'base.php';
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
    $querymess = "select * from `login` where `id` = $id;";
    //$queryfrom = "SELECT `UserID`, `Username` FROM `users`";
  $result = mysqli_query($dbconnect, $querymess);          //query
    //$result2 = mysql_query($queryfrom);
  //$array = mysql_fetch_array($result);                          //fetch result    
if(mysqli_num_rows($result) > 0){
  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
$rows = array();
    while($r = mysqli_fetch_assoc($result)){
        $rows[] = $r; //has the same effect, without the superfluous data attribute
        //$rows[] = array('data' => $r);
    }
//    while($s = mysql_fetch_assoc($result2)){
//        $rows[] = $s;
//    }
$j = json_encode($rows);
  echo $j;
}
else {
    echo "not found";
}
?>