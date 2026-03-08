<?php
// absolute  file path
require __DIR__. "/../../config/database.php";
    
    // get id and parse to int (populate student info)
     if (isset($_GET['id'])) {
          $sId = (int)$_GET['id'];
     } else {
          $sId = 0;
     }

     // redirect to index if id = 0 (unable to access editstudent page via url)
     if ($sId == 0) {
          header("Location: ../index.php");
     } else {
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
   }

    // update student data
    if (isset($_POST['update_student'])) {
          // intialize student data variables
          $id = $_POST['id'];
          $student_id = $_POST['edit_student_id'];
          $first_name = $_POST['edit_first_name'];
          $last_name = $_POST['edit_last_name'];
          $course = $_POST['edit_course'];
          $level = $_POST['edit_level'];
     
          // query updated data to db
          $sqlUpdate = "UPDATE students SET student_id = ?, first_name = ?, last_name = ?,
                      course = ?, level = ? WHERE id = ?";
          $updatedData = mysqli_prepare($conn, $sqlUpdate);
          
          mysqli_stmt_bind_param($updatedData, 'sssssi',$student_id,$first_name,$last_name,$course,$level,$id);

          mysqli_stmt_execute($updatedData);

          mysqli_stmt_close($updatedData);

          // after updating data redirect back to index
          header("Location: /../index.php");
    }

// close connection
mysqli_close($conn);

