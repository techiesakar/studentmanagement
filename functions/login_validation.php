
<?php

if (isset($_SESSION['LOGGED_IN'])) {
    header('location: admin');
}
$errors = [];
$username = "";
$password = "";
$role = "";

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }


    if (count($errors) == 0) {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            if ($user['role'] == '1') {
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['LOGGED_IN'] = true;
                header('location: admin');
            } elseif ($user['role'] == '2') {
                $_SESSION['role'] = $user['role'];
                echo $_SESSION['role'];
            } elseif ($user['role'] == '3') {
                $_SESSION['role'] = $user['role'];
                echo $_SESSION['role'];
            } else {
              echo "sakar";
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
