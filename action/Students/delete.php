<?php
require __DIR__. "/../../config/database.php";

// get student info after clciking delete btn
if (isset($_GET['id'])) {
    $sId = (int)$_GET['id'];
} else {
    $sId = 0;
}

if ($sId == 0) {
    header("Location: /../student_Module/studentList.php");
} else {
    // get student info based on the pk id and populate inputs
    $sqlGet = "SELECT * FROM students WHERE id = ?";
    // prepare sql stmt
    $getData = mysqli_prepare($conn,$sqlGet);
    // bind parameter
    mysqli_stmt_bind_param($getData, 'i', $sId);
    // excecute query
    mysqli_stmt_execute($getData);
    // get result from query
    $result = mysqli_stmt_get_result($getData);
    // fetch result
    $student = mysqli_fetch_assoc($result);
    // close stmt
    mysqli_stmt_close($getData);
}

// deleting student info
if (isset($_POST['delete_student'])) {
    // store id to a var
    $Id = (int)$_POST['id'];
    //delete student via id 
    $sqlDelete = "DELETE FROM students WHERE id = ?";
    // prepare stmt
    $deleteData = mysqli_prepare($conn,$sqlDelete);
    // bind param
    mysqli_stmt_bind_param($deleteData,'i',$Id);
    // execute query
    mysqli_stmt_execute($deleteData);
    echo("student id = " . $Id . "is deleted");
    // close stmt
    mysqli_stmt_close($deleteData);
}

// close db connection
mysqli_close($conn);