<?php

$errors = [];
$min = 3;
$max = 15;
$first_name = "";
$last_name = "";
$username = "";
$email = "";
$role_name = "";
$password = "";
$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement') or die('Connection Failed');
$user_id = (isset($_POST['id']) ? $_POST['id'] : '');

echo $user_id;


// Register User
if (isset($_POST['update_user'])) {

    //Receive all the inputs from the users 
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role_name = $_POST['role_name'];


    // By adding array_push() corresponding error into errors array

    if (empty($first_name)) {
        // array_push($errors, "First Name is required");
        $errors[] = "First Name is required";
    }
    if (strlen($first_name) < $min) {
        $errors[] = "First name must have at least {$min} characters";
    }
    if (strlen($first_name) > $max) {
        $errors[] = "First name can have at most {$max} characters";
    }
    if (empty($last_name)) {
        $errors[] = "Last Name is required";
    }
    if (strlen($last_name) < $min) {
        $errors[] = "last name must have at least {$min} characters";
    }
    if (strlen($last_name) < $min) {
        $errors[] = "Last name can have at most {$max} characters";
    }
    if (empty($username)) {
        $errors[] = "Username is required";
    }
    if (strlen($username) < $min) {
        $errors[] = "Username must have at least {$min} characters";
    }
    if (strlen($username) > $max) {
        $errors[] = "Username can have at most {$max} characters";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    if (strlen($password) < 5) {
        $errors[] = "Password must have at least 5 characters";
    }
    if (strlen($password) > 15) {
        $errors[] = "Password can have at most {$max} characters";
    }


    if (count($errors) == 0) {
        $password = md5($password);
        $username = strtolower($username);
        //encrypt the password before saving in the database



        $sql = "UPDATE users SET username ='{$username}',email ='{$email}', first_name ='{$first_name}',last_name ='{$last_name}', password ='{$password}', role ='{$role_name}' WHERE id={$user_id}";
        
        $result = mysqli_query($conn, $sql) or die("Query Unsuccaaessfull");
        header('location: ../users.php');
        mysqli_close($conn);
    }
}


// Login Validation //
