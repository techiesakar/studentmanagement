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
$validation_code = "";
$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement') or die('Connection Failed');


// Register User
if (isset($_POST['reg_user'])) {

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






    // first check the database to make sure 
    // a user does not already exist with the same username and/or email

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email 'LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Finally, register user if there are no errors in the form


    if (count($errors) == 0) {
        $password = md5($password);
        //encrypt the password before saving in the database
        $sql = "INSERT INTO users (first_name, last_name, username, email, password, role, validation_code, status) 
                  VALUES('{$first_name}','{$last_name}','{$username}', '{$email}', '{$password}','{$role_name}','$validation_code','1')";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");
        header('location: ../');
        mysqli_close($conn);
    }
}


// Login Validation //
