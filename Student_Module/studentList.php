<?php
require __DIR__. "/../action/Students/readStudent.php";

// include navbar header
include("../includes/header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student List</title>
</head>

<body>
    <!--main content-->
    <main>
        <div class="container mt-2">
            <h2>Student List</h2>
            <a class="btn btn-primary" href="addStudent.php">+ Add Student</a>
        </div>
        <hr>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <th>Student ID</th>
                    <th>Fullname</th>
                    <th>Course</th>
                    <th>Level</th>
                    <th>Action</th>
                </thead>
                <tbody> 
                    <!--php for each loop-->
                    <?php foreach($students as $student): ?>
                    <tr>  
                        <th><?php echo $student['student_id']?></th>
                        <th><?php echo $student['first_name'] . " " . $student['last_name']?></th>
                        <th><?php echo $student['course']?></th>
                        <th><?php echo $student['level']?></th>
                        <th>
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" href="EditStudent.php?id=<?php echo $student['id'];?> name="edit_student_info">Edit</a>
                                <a class="btn btn-danger"  href="deleteStudent.php?id=<?php echo $student['id'] ?> name="delete_student_info">Delete</a>
                            </div>
                        </th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>