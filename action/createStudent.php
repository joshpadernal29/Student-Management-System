<?php
// stop this code from running ntil the add student btn is clicked
if (isset($_POST['add_student'])) {
    require('config/database.php');

    // get data from addStudent page
    $student_id = $_POST['student_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $course = $_POST['course'];
    $level = $_POST['level'];

    // prepare sql statement
    $sqlInsert = "INSERT INTO students(student_id,first_name,last_name,course,level)
                VALUES (?,?,?,?,?)";

    // prepare the statement using your $con
    $insertData = mysqli_prepare($conn, $sqlInsert);

    // bind data 
    mysqli_stmt_bind_param($insertData,'sssss',$student_id,$fname,$lname,$course,$level);

    // execute query
    mysqli_stmt_execute($insertData);

    // close statement
    mysqli_stmt_close($insertData);

    // close connection
    mysqli_close($conn);

}

