<?php
include 'conn2.php';
$name = $_POST['name'];

$query = "Delete from cal4 where name = '$name'";
$send = mysqli_query($connection,$query);

if ($send){
    echo 'Successfully Removed';
} else {
    echo 'Please enter correct name';
}

?>