<?php session_start();

if (isset($_SESSION['username'])) {
    header('location: admin.php');
}

include("functions/config.php");
include("functions/reg_validation.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'assets/css/cdn_css.php'; ?>
</head>

<body style="background-color: #20323cd8;">

    <div class="container text-white vh-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div style="max-width: 540px; background-color: #20323C;" class="col w-100 py-5 px-4 rounded">

                <form action="register.php" method="POST">
                    <h3 class="text-center">Signup Here</h3>
                    <p class="text-center">Let's be part of our family</p>
                    <p><?php include('helpers/errors.php'); ?></p>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" placeholder="First Name" required value="<?php echo $first_name; ?>" id="first_name" class="form-control mr-1 rounded" name="first_name">
                            <input type="text" placeholder="Last Name" required value="<?php echo $last_name; ?>" id="last_name" class="form-control rounded" name="last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </span>
                            </div>
                            <input type="text" value="<?php echo $username; ?>" required placeholder="Username" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-envelope"></span>
                                </span>
                            </div>
                            <input type="email" placeholder="Email Address" required value="<?php echo $email; ?>" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-lock"></span>
                                </span>
                            </div>
                            <input type="password" id="showPassword" placeholder="Password" class="form-control" required name="password">
                        </div>
                    </div>

                    <div class="form group">
                        <label for="" class="from-check-label">
                            <input class="mr-2" onclick="myFunction()" type="checkbox">Show Password
                        </label>
                    </div>
                    <div class="form group">
                        <label for="" class="from-check-label">
                            <input class="mr-2" required type="checkbox">I agree to
                            <a href="#">Terms of Services</a> &
                            <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                    <!-- Form Group Forget Password Ends -->
                    <div class="form-group">
                        <button type="submit" name="reg_user" class="btn btn-primary w-100 ">Sign up</button>
                    </div>
                    <!-- Form Group Button Ends -->
                </form>

                <div class="text-center">
                    Already a member ? <a href="login">Login Here</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'assets/js/cdn_js.php'; ?>
    <script src="assets/js/showPassword.js"></script>
</body>

</html>