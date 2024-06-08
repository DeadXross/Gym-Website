<?php

include ('conn.php');

$id = $_REQUEST['id'];
$bodyprefTEXT1 = $_REQUEST['bodyprefTEXT'];


$query = "update cal2 set bodprefTEXT='$bodyprefTEXT1' where id='$id'";

$send_query =mysqli_query($connection,$query);

if($send_query){
    echo 'recored updated \n go back to update new records';
}
else{
    echo 'recored not update \n go back to try again';
}
?>