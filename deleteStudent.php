<?php
include("action/delete.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete Student</title>
</head>

<body>
    <div class="container justify-content-center d-flex mt-5">
        <div class="card shadow w-50 ">
            <div class="card-header">Are you sure you want to delete this Student?</div>
            <div class="card-body">
                <form action="action/delete.php" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $student['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" name="delete_student_id" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $student['student_id']; ?>" readonly>
                        <label for="floatingInput" class="text-secondary">Student ID</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="text" name="delete_first_name" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $student['first_name']; ?>" readonly>
                        <label for="floatingInput" class="text-secondary">First name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="delete_last_name" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $student['last_name']; ?>" readonly>
                        <label for="floatingInput" class="text-secondary">Last name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="delete_course" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $student['course']; ?>" readonly>
                        <label for="floatingSelect">Course</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="delete_level" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $student['level']; ?>" readonly>
                        <label for="floatingSelect">Year Level</label>
                    </div>
                    <div class="d-flex justify-content-end gap-3">
                        <a class="btn btn-outline-secondary" href="index.php">Cancel</a>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>