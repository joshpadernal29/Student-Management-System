<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "StudentManagementDb";
$port = 3307;

// create connection 
$conn = mysqli_connect($servername,$username,$password,$db_name,$port);

// check connection 
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
echo("connected succesfully");

?>