<?php
require __DIR__. "/../action/Students/createStudent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Student</title>
</head>

<body>
    <main>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card shadow w-50 ">
                <div class="card-body">
                    <form action="" method="post">
                        <h4>Add Student</h4>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" name="student_id" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="text-secondary">Student ID</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" name="first_name" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="text-secondary">First name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="last_name" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="text-secondary">Last name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="course">
                                <option selected></option>
                                <option value="BSIT">BSIT</option>
                                <option value="BSCS">BSCS</option>
                                <option value="BSHM">BSHM</option>
                            </select>
                            <label for="floatingSelect">Course</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="level">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <label for="floatingSelect">Year Level</label>
                        </div>
                        <div class="m-3 d-flex justify-content-end gap-3">
                            <a class="btn btn-outline-danger" href="studentList.php">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="add_student">Add Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>