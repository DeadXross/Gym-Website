<?php

include ('conn2.php');


$name = $_POST['name'];
$body = $_POST ['body'];


$query= "insert into cal4(name,body) values ('$name','$body')";

$send_query = mysqli_query($connection,$query);

if ($send_query)
{ echo 'Entry Successful.';
} else {
    echo 'Could Not Enter This Name. Try Same Name With Special Symbols';
}

?>
