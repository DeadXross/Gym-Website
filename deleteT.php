<?php
include 'conn.php';
$cnic = $_POST['cnic'];

$query = "Delete from cal3 where cnic = '$cnic'";
$send = mysqli_query($connection,$query);

if ($send){
    echo 'You have successfully unsubscribed';
} else {
    echo 'Please enter correct ID.';
}

?>