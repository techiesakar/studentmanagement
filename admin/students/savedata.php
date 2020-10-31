<?php

if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if (!isset($_SESSION['role'])) {
    header('location: ../errors/403.php');
}


$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_faculty= $_POST['sfaculty'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement') or die('Connection Failed');

$sql = "INSERT INTO student(sname,saddress,sfaculty,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_faculty}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header('location: http://localhost/studentmanagement/students');

mysqli_close($conn);
?>