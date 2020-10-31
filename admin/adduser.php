<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}

if (!isset($_SESSION['role'])) {
    header('location: ../errors/403.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Students</title>
    <?php include("includes/header.php"); ?>
</head>

<body>
    <div class="main-wrapper">
        <?php include ("includes/topbar.php"); ?>

        <!-- Fixed Left Nav -->

        <aside class="fixed-left-nav">
            <ul>
                <li>
                    <a href="../admin">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript:void(0);" class="dropdown-btn">
                        <span class="icon"><i class="fas fa-newspaper"></i></i></span>
                        <span class="title">Posts</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="">
                                <span class="title">Add New</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="dropdown-btn">
                        <span class="icon"><i class="fas fa-clone"></i></span>
                        <span class="title">Pages</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="">
                                <span class="title">Add New</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="dropdown-btn ">
                        <span class="icon"><i class="fas fa-user-graduate"></i></span>
                        <span class="title">Student Record</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="students">
                                <span class="title">All Records</span>
                            </a>
                        </li>
                        <li>
                            <a href="students/add.php">
                                <span class="title">Add New</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Update</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">Delete</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-comments"></i></span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="dropdown-btn nav-active">
                        <span class="icon"><i class="fas fa-user"></i></i></span>
                        <span class="title">Users</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="">
                                <span class="title">Add User</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title">View Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-cog"></i></i></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-lock" aria-hidden="true"></i></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>

            </ul>

        </aside>
        <div class="page-wrapper">


            <div id="main-content" style="background-color: #F1F1F1;">
                <h2>Add New User</h2>
                <form class="post-form" action="ghost/insertuser.php" method="post" style="margin: 0; background:#E6E6E6; width:60%">
                    <?php include("../helpers/errors.php"); ?>
                    <div class="form-group">

                        <div class="form-group">
                            <label>Username</label>
                            <input required type="text" name="username" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input required type="text" name="email" />
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input required type="text" name="first_name" />
                        </div>
                        <div class="form-group">

                            <label>Last Name</label>
                            <input required type="text" name="last_name" />
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input required type="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select required name="role_name">
                                <option value="" selected disabled>Select Role</option>
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement') or die('Connection Failed');

                                $sql = "SELECT * FROM  role";
                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                while ($row = mysqli_fetch_assoc($result)) {


                                ?>

                                    <option value="<?php echo $row['role_id'] ?>"><?php echo $row['role_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <input class="submit" type="submit" name="reg_user" value="Add New User" style="width: 150px;" />
                </form>
            </div>


            <?php include("includes/footer.php"); ?>

        </div>
        <!-- Page Wrapper Ends -->
    </div>
    <!-- Main Wrapper Ends -->
    <script src="js/toggleMenu.js"></script>
    <script src="js/dropDown.js"></script>


</body>

</html>