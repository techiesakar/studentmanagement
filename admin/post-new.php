<?php
session_start();


if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Post</title>
    <?php include("includes/header.php"); ?>
</head>

<body>
    <div class="main-wrapper">
    <?php include ("includes/topbar.php"); ?>


        <!-- Fixed Left Nav -->

        <aside class="fixed-left-nav">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript:void(0);" class="dropdown-btn nav-active">
                        <span class="icon"><i class="fas fa-newspaper"></i></i></span>
                        <span class="title">Posts</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="edit.php">
                                <span class="title">All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="post-new.php">
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
                            <a href="edit.php?post_type=page">
                                <span class="title">All Pages</span>
                            </a>
                        </li>
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
                    <a href="javascript:void(0);" class="dropdown-btn">
                        <span class="icon"><i class="fas fa-user"></i></i></span>
                        <span class="title">Users</span>
                        <span class="arrow fas d-block fa-caret-left"></span>
                    </a>
                    <ul id="showMenu" class="feat-show d-none onclick-sidemenu">
                        <li>
                            <a href="users.php">
                                <span class="title">All User</span>
                            </a>
                        </li>
                        <li>
                            <a href="adduser">
                                <span class="title">Add User</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.php">
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
                    <a href="../logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>

            </ul>

        </aside>
        <div class="page-wrapper ">

            <h2 class="text-center">No Posts Found</h2>

            <?php include("includes/footer.php"); ?>

        </div>
        <!-- Page Wrapper Ends -->
    </div>
    <!-- Main Wrapper Ends -->
    <script src="js/toggleMenu.js"></script>
    <script src="js/dropDown.js"></script>


</body>

</html>