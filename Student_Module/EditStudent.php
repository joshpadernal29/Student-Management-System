<?php
require __DIR__. "/../action/Students/edit.php";

// include navbar header
include("../includes/header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Student</title>
</head>

<body>
    <main>
        <div class="container p-3 d-flex justify-content-center">
            <div class="card shadow w-50 ">
                <div class="card-body">
                    <form action="../action/Students/edit.php" method="post">
                        <h4>Edit Student info</h4>
                        <hr>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $student['id']; ?>">
                        <div class="form-floating mb-3">
                            <input type="text" name="edit_student_id" class="form-control" id="floatingInput"
                                placeholder="name@example.com" value="<?php echo $student['student_id']; ?>">
                            <label for="floatingInput" class="text-secondary">Student ID</label>
                        </div>
                        <div class=" form-floating mb-3">
                            <input type="text" name="edit_first_name" class="form-control" id="floatingInput"
                                placeholder="name@example.com" value="<?php echo $student['first_name']; ?>">
                            <label for="floatingInput" class="text-secondary">First name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="edit_last_name" class="form-control" id="floatingInput"
                                placeholder="name@example.com" value="<?php echo $student['last_name']; ?>">
                            <label for="floatingInput" class="text-secondary">Last name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="edit_course" value="<?php echo $student['course']; ?>">
                                <option value="BSIT" <?= ($student['course'] == 'BSIT') ? 'selected' : '' ?>>BSIT</option>
                                <option value="BSCS" <?= ($student['course'] == 'BSCS') ? 'selected' : '' ?>>BSCS</option>
                                <option value="BSHM" <?= ($student['course'] == 'BSHM') ? 'selected' : '' ?>>BSHM</option>
                            </select>
                            <label for="floatingSelect">Course</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="edit_level" value="<?php echo $student['level']; ?>">
                                <option value="1" <?= ($student['level'] == '1') ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= ($student['level'] == '2') ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= ($student['level'] == '3') ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= ($student['level'] == '4') ? 'selected' : '' ?>>4</option>
                            </select>
                            <label for="floatingSelect">Year Level</label>
                        </div>
                        <div class="m-3 d-flex justify-content-end gap-3">
                            <a class="btn btn-outline-danger" href="studentList.php">Cancel</a>
                            <button class="btn btn-primary" type="submit" name="update_student">Update Student
                                info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include("../includes/footer.html"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>