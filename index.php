<?php
include("config/database.php");

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>index</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark bg-dark navbar-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                Student-Management-System
            </a>
        </div>
    </nav>
    <!--end of navbar-->
    <main>
        <div class="container mt-2">
            <h2>Student List</h2>
            <button type="button" class="btn btn-primary">+ Add Student</button>
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
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
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