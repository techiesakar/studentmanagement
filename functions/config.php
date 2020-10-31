<?php

$host = "localhost";
$dbname = "studentmanagement";
$dbuser = "root";
$dbpass = "";

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname); //database driver mysqli
if (!$conn) {  // connection == conn
    die("Couldn't establish database connection: " . mysqli_connect_error());
}
