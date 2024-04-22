

<?php include('donor/database.php'); ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="donor/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>

    <body>

        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="img/ico.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control input_user" value=""
                                    placeholder="Username" required>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass" value=""
                                    placeholder="Password" required>
                            </div>

                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" name="userlogin" style="border-radius: 0%" class="btn login_btn">
                                    Login</button>
                            </div>
                        </form>
                    </div>
                    <?php require_once('donor/database.php'); ?>
                  
                    <?php
include 'donor/database.php';
if (isset($_POST['userlogin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Check admin table for admin credentials
    $admin_query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $admin_row = mysqli_fetch_assoc($admin_query);
    // Check user table for user credentials
    $user_query = mysqli_query($conn, "SELECT * FROM donor WHERE username='$username' AND password='$password'");
    $user_row = mysqli_fetch_assoc($user_query);
    // Check if admin credentials are valid
    if ($admin_row) {
        // Set user type in session
        $_SESSION['type'] = 'admin';
        header("Location: admin/dashboard.php");
        exit;
    }
    elseif ($user_row) {
        $_SESSION['type'] = 'user';
        header("Location: donor/dashboard.php");
        exit;
    } else {
        echo '
								<div class="alert alert-danger alert-dismissible">
                                        Invalid Username & Password.
                                    </div> ';
    }
}
?>


                    <div class="mt-4">
                        <!--<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#"  class="ml-2" style="text-decoration:none">Sign Up</a>
					</div> -->
                        <div class="d-flex justify-content-center links">
                            <a href="donor/register.php" style="text-decoration:none; color: white">Don't have an
                                account? Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>



</html>