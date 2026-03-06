<?php
require __DIR__. "/../config/database.php";

// get student info after clciking edit btn
if (isset($_GET['id'])) {
    $sId = (int)$_GET['id'];
} else {
    $sId = 0;
}

if ($sId == 0) {
    header("Location: ../index.php");
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












mysqli_close($conn);