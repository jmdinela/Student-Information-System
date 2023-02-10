<?php
include('includes/dbconnection.php');

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=student_data.csv");

$sql = "SELECT `id`, `class`, `studentno`, `studentName`, `age`, `course`, `year`, `status`, `cabinet`, `gender`, `email`, `contactno`, `parentName`, `relation`, `occupation` FROM students";
$result = mysqli_query($con,$sql);

$file = fopen("php://output", "w");

fputcsv($file, array("id", "class", "studentno", "studentName", "age", "course", "year", "Status"));

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($file, $row);
}

fclose($file);
exit;
?>
