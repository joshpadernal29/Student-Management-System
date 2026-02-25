<?php
require("config/database.php");
    
    // get id and parse to int
    $sId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

   if ($sId > 0) {
        // get student info based on the id
        $sqlGet = "SELECT * FROM students WHERE id = ?";
        // prepare 
        $getData = mysqli_prepare($conn,$sqlGet);
        // bind parameters
        mysqli_stmt_bind_param($getData,'i',$sId);
        // execute query
        mysqli_stmt_execute($getData);
        // get the result from the query
        $result = mysqli_stmt_get_result($getData);
        // fetch result 
        $student = mysqli_fetch_assoc($result);
        // close query
        mysqli_stmt_close($getData);
        // close connection
        mysqli_close($conn);
   } else {
        die("student not found!");
   }

    // update data
    if (isset($_POST['update_student'])) {
        // logic later
    }