<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "blooddb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM donor";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Query failed: " . mysqli_error($conn));
}

$row_count = mysqli_num_rows($query);

echo "<h1>" . $row_count . "</h1>";

mysqli_close($conn);
?>
