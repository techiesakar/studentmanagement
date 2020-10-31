<!doctype html>
<html lang="en">

<head>
    <title>Recover Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include ("assets/css/cdn.php"); ?>
    </head>

<body style="background-color: #20323cd8;">
    <div class="container text-white vh-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div style="max-width: 400px; background-color: #20323C;" class="col w-100 py-5 px-4 rounded">
                <form action="">
                    <h3 class="text-center">Find Your Account</h3>
                    <p class="text-center">Please enter your email to search for your account.</p>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-envelope"></span>
                                </span>
                            </div>
                            <input type="email" placeholder="Email Address" class="form-control" required name="email">
                        </div>
                    </div>

                    <div class="row justify-content-end align-items-center">
                        <input class="submit btn btn-primary mr-2" type="submit" name="showbtn" value="Search" />
                        <span><a class="btn btn-danger" href="login">Cancel</a></span>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <?php include ("assets/js/cdn.php"); ?>
</body>

</html>