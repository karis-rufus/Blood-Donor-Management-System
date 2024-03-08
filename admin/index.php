<?php session_start(); ?>
<?php include('databaseconn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('img/page.jpg'); /* Path to your background image */
            background-size: cover;
        }
        .container {
            width: 300px;
            background-color: cyan;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .wrapper {
            text-align: center;
        }
        .input {
            position: relative;
            margin-bottom: 20px;
        }
        .input input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }
        .input i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #888;
        }
        .remember-forgot {
            margin-bottom: 20px;
        }
        .remember-forgot label {
            margin-right: 10px;
        }
        .register-link {
            text-align: center;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="#" method="post">
                <h1>Admin Login</h1>
                <div class="input box">
                    
                    <input type="text" placeholder="username" required name="username">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input box">
                    <input type="password" placeholder="password" required name="password">
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="register-link">
                    
                </div>      
            </form>
        </div>
    </div>
</body>
</html>
<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:dashboard.php');
					
				}
			else
				{
					echo '
								<div class="alert alert-danger alert-dismissible">
                                        Invalid Username & Password.
                                    </div> ';
				}
		}
  ?>
