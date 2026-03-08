<?php
require __DIR__. "/../config/database.php";

$sqlRead = "SELECT * FROM students";
$students = [];
$db_message = "";

try{
    $result =  mysqli_query($conn,$sqlRead);
    $students = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $db_message = "student added";
} catch(mysql_sql_exception $e) {
    $db_message = "Error:" . $e;
}

mysqli_close($conn);