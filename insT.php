<?php

include ('conn1.php');


$name = $_POST['name'];
$body = $_POST ['body'];
$cnic = $_POST['cnic'];
$gender = $_POST ['gender'];

$query= "insert into cal3(name,body,cnic,gender) values ('$name','$body','$cnic','$gender')";

$send_query = mysqli_query($connection,$query);

if ($send_query)
{ echo 'Subscription confirmed.';
} else {
    echo 'Could Not subscribe.';
}

?>
