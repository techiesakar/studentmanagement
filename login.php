<?php session_start();
if (isset($_SESSION['username'])) {
    header('location: admin');
}
include("functions/config.php");
include("functions/login_validation.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'assets/css/cdn.php'; ?>
</head>

<body style="background-color: #20323cd8;">
    <div class="container text-white vh-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div style="max-width: 480px; background-color: #20323C;" class="col w-100 py-5 px-4 rounded">
                <form action="login.php" method="POST">
                    <h3 class="text-center">Login Here</h3>
                    <p class="text-center">Login with your email and password</p>
                    <p><?php include('helpers/errors.php'); ?></p>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </span>
                            </div>
                            <input type="username" required placeholder="Username" value="<?php echo $username; ?>" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </span>
                            </div>
                            <input type="password" required id="showPassword" placeholder="Password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form group">
                        <label for="" class="from-check-label">
                            <input class="mr-2" onclick="myFunction()" type="checkbox">Show Password
                        </label>
                    </div>
                    <div class="form-group">
                        <a href="recoverpassword">Forget Password ?</a>
                    </div>
                    <!-- Form Group Forget Password Ends -->
                    <div class="form-group">
                        <button type="submit" name="login_user" class="btn btn-primary w-100 ">Log In</button>
                    </div>
                    <!-- Form Group Button Ends -->
                </form>
                <div class="text-center">
                    Not Registered Yet ? <a href="register.php">Signup Here</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'assets/js/cdn.php'; ?>
    <script src="assets/js/showPassword.js"></script>
</body>

</html>