<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <input type="submit" name="register" value="register">




    </form>
</body>
</html>
<?php
    include("database.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];

        // Validate form data (you can add more validation as needed)
        if (empty($username) || empty($password) || empty($name)) {
            echo "Both username and password are required.";
        } else {
            // Create database connection
            $conn = new mysqli("$servername", $username, $password,$name, "$db");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and execute SQL query to insert user data into the database
            $sql = "INSERT INTO users (username, password, name) VALUES ('$username', '$hashed_password', '$name')";
            if ($conn->query($sql) === TRUE) {
                echo "User registered successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close connection
            $conn->close();
        }
    }
    
    ?>