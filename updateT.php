<?php

include ('conn1.php');

$cnic = $_REQUEST['cnic'];
$body = $_REQUEST['body'];


$query = "update cal3 set body='$body' where cnic='$cnic'";

$send_query =mysqli_query($connection,$query);

if($send_query){
    echo 'recored updated \n go back to update new records';
}
else{
    echo 'recored not update \n go back to try again';
}
?>