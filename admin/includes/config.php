<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
if (!$conn) {
    die("Count not connect to database!" . mysqli_connect_error());
}
?>