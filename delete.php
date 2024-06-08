<?php
include 'conn.php';
$id = $_POST['id'];

$query = "Delete from cal2 where id = '$id'";
$send = mysqli_query($connection,$query);

if ($send){
    echo 'You have successfully unsubscribed';
} else {
    echo 'Please enter correct ID.';
}

?>