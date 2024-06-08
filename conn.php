<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cal";

$connection = mysqli_connect($host,$user,$pass,$db);
if ($connection)
{
    echo 'successfully connected to database.';
} else{
    echo ' Failed to connect to database.';
}

?>