<?php

include ('conn.php');

$id = $_POST['id'];
$name = $_POST['username'];
$bodyprefTEXT = $_POST ['bodyprefTEXT'];
$gender = $_POST ['gender'];

$query= "insert into cal2(id,name,bodprefTEXT,gender) values ('$id','$name','$bodyprefTEXT','$gender')";

$send_query = mysqli_query($connection,$query);

if ($send_query)
{ echo 'Subscription confirmed.';
} else {
    echo 'Could Not subscribe.';
}

?>
