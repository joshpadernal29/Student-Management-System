<?php
require __DIR__. "/../action/Students/readStudent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <!-- HEADER -->
    <?php include("../includes/header.html"); ?>
    <!-- END HEADER -->


    <div class="container-fluid">
        <div class="row">

            <!-- SIDEBAR -->
            <?php include("../includes/sidebar.html"); ?>
            <!-- END SIDEBAR -->


            <!-- MAIN CONTENT -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <!-- PAGE TITLE -->
                <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <h2 class="mb-0">
                        <i class="bi bi-people-fill me-2"></i>
                        Student List
                    </h2>
                    <a class="btn btn-primary" href="addStudent.php">
                        <i class="bi bi-person-plus-fill me-1"></i>
                        Add Student
                    </a>
                </div>


                <!-- SEARCH BAR -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search student...">
                        </div>
                    </div>
                </div>


                <!-- STUDENT TABLE -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">

                                    <tr>
                                        <th>Student ID</th>
                                        <th>Full Name</th>
                                        <th>Course</th>
                                        <th>Level</th>
                                        <th class="text-center">Actions</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php foreach($students as $student): ?>
                                    <tr>
                                        <td>
                                            <?php echo $student['student_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['first_name'] . " " . $student['last_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['course']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['level']; ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-outline-primary"
                                                href="EditStudent.php?id=<?php echo $student['id']; ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a class="btn btn-sm btn-outline-danger"
                                                href="deleteStudent.php?id=<?php echo $student['id']; ?>">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END MAIN -->
        </div>
    </div>
    <!-- FOOTER -->
    <?php include("../includes/footer.html"); ?>
    <!-- END FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>