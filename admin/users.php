<?php include("includes/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <?php include("includes/header.php"); ?>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/btn.css">
</head>

<body>
    <div class="main-wrapper">

        <?php include("includes/topbar.php"); ?>

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
                    <a href="javascript:void(0);" class="dropdown-btn">
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
                    <a href="javascript:void(0);" class="dropdown-btn nav-active">
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
        <div class="page-wrapper">

            <div class="container-fluid px-20">
                <input class="my-10 btn btn-danger" type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure want to delete!')" class="btn btn-danger"></td>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        if (isset($_POST['id'])) {
                            foreach ($_POST['id'] as $id) {
                                $query = "DELETE FROM users WHERE id='$id'";
                                mysqli_query($conn, $query);
                            }
                        }
                    }

                    $conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
                    $sql = "SELECT * FROM users JOIN role WHERE role.role_id = users.role";
                    $result = mysqli_query($conn, $sql);
                    ?>

                    <table class="table table font-14 mt-6">
                        <thead class="text-left text-primary">

                            <tr>
                                <th><input type="checkbox" onclick="selectAll(this)" id="selectall"></th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Posts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><input type="checkbox" class="checkItem" value="<?= $row['id'] ?>" name="id[]"></td>
                                    <td class="d-flex align-items-center">
                                        <div class="col user-img mr-20" style="width: 35px; height:35px;">
                                            <img src="img/user.jpg" height="35px" width="35px" alt="" style="border-radius: 100%;">
                                        </div>
                                        <div class="col user-items">

                                            <span class="username" style="font-size: 14px;"> <?php echo $row['username']; ?>
                                            </span> <br>
                                            <span class="action" style="font-size: 12px;">
                                                <span class="delete"> <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                                </span> <span>|</span>
                                                <span class="edit"> <a href='ghost/edit-user.php?id=<?php echo $row['id']; ?>'>Edit</a>
                                                </span> <span>|</span>
                                                <span class="view"> <a href='user-profile.php?id=<?php echo $row['id']; ?>'>View</a>
                                                </span>

                                            </span> </div>
                                    </td>
                                    <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['role_name']; ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>

            <?php include("includes/footer.php"); ?>
        </div>
        <!-- Page Wrapper End -->
    </div>
    <!-- Main Wrapper End -->
    <script src="js/toggleMenu.js"></script>
    <script src="js/dropDown.js"></script>
    <script src="js/checkBox.js"></script>



</body>

</html>