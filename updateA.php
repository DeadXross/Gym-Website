<?php

include ('conn2.php');

$name = $_REQUEST['name'];
$body = $_REQUEST['body'];


$query = "update cal4 set body='$body' where name='$name'";

$send_query =mysqli_query($connection,$query);

if($send_query){
    echo 'Athelete Body Updated.';
}
else{
    echo 'Could Not Update Athelete, Enter Correct Name(consult your email)';
}
?>