
<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement') or die('Connection Failed');
?>
<?php
$user_id = $_GET['id'];

$sql = "DELETE FROM users WHERE id={$user_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("location: users.php");

mysqli_close($conn);
