<?php
// absolute  file path
require __DIR__. "/../../config/database.php";

// get pages
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = (int)$_GET['page_no'];
} else {
    $page_no = 1;
}

// total rows to display
$total_students_per_page = 5;
// get page offset for LIMIT query
$offset = ($page_no - 1) * $total_students_per_page;
// get previous page
$previous_page = $page_no - 1;
// get next page
$next_page = $page_no + 1;

// get total rows of students list
$sqlCount = "SELECT COUNT(*) AS total_rows FROM students";
$count_result = mysqli_query($conn, $sqlCount);

// total rows
$records = mysqli_fetch_array($count_result);
// store records to variable
$total_rows = $records['total_rows'];

// get total pages
$total_pages = ceil($total_rows / $total_students_per_page);

//sql query
$sql = "SELECT * FROM students LIMIT $offset, $total_students_per_page";

// result
$result = mysqli_query($conn, $sql);
// Converting result to a loopable array for the frontend
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);
?>