<?php
session_start();
if (isset($_SESSION['role'])) {
    header('location: http://localhost/studentmanagement');
}
else {
    header('location: 403.php');
}
