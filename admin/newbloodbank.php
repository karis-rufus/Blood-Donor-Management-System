<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDAS</title>

   
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

 
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>

<body>
    
<div id="wrapper">

<?php include 'includes/nav.php'?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New BloodBank</h1>
        </div>
      
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Please fill up the form below:
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
<form action="newbloodbank.php" method="post">
<div class="form-group"><label for="bank_name">Bank Name:</label>
    <input  class="form-control" type="text" id="bank_name" name="bank_name" required><br>
                                        </div>
    
    <div class="form-group">
    <label for="email">Email:</label>
    <input  class="form-control" type="email" id="email" name="email" required><br></div>
    <div class="form-group">
    <label for="blood_needed">Blood Needed:</label>
    <input class="form-control" type="text" id="blood_needed" name="blood_needed" required><br></div>
    <div class="form-group">
    <label for="location">Location:</label>
    <input class="form-control" type="text" id="location" name="location" required><br></div>
    
    <button class="btn btn-success" type="submit">Submit</button>
</form>
                    </body>

                    <?php
include('databaseconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $bank_name = $_POST['bank_name'];
    $email = $_POST['email'];
    $blood_needed = $_POST['blood_needed'];
    $location = $_POST['location'];

    // Sanitize data to prevent SQL injection
    $bank_name = mysqli_real_escape_string($conn, $bank_name);
    $email = mysqli_real_escape_string($conn, $email);
    $blood_needed = mysqli_real_escape_string($conn, $blood_needed);
    $location = mysqli_real_escape_string($conn, $location);

    // Insert data into the database
    $query = "INSERT INTO bloodbank (bank_name, email, blood_needed, location) VALUES ('$bank_name', '$email', '$blood_needed', '$location')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Bloodbank created  successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close connection
?>
</html>
