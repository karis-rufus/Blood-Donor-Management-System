<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDAS</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <?php include("../includes/donornav.php")?>
    <?php require_once('database.php'); ?>

    <style>
        footer {
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #CCC;
            position: fixed;
            width: 100%;
        }

        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }

        .page-header {
            margin-top: 30px;
        }

        .container {
            margin-top: 30px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: cyan ; 
            background-size: cover;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

<div id="wrapper">
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                    <h1 class="page-header ">Donate Blood Section</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Please fill up the form below:</h2><br>
                        </div>
                        <div class="panel-body">
                        <div class="row">
                                    <div class="col-lg-12">
                            <form role="form" action="donate.php" method="POST">

                                <div class="form-group">
                                    <label>Enter Full Name</label><br>
                                    <input class="form-control" type="text" name="name" required pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces"><br>
                                </div>

                                <div class="form-group">
                                    <label>Gender [ M/F ]</label><br>
                                    <input class="form-control" type="text" name="gender" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Enter D.O.B</label><br>
                                    <input class="form-control" type="date" name="dob" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Enter Weight</label><br>
                                    <input class="form-control" type="number" placeholder="KG" name="weight" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Enter Blood Group</label><br>
                                    <select class="form-control" name="bloodgroup" required>
        <option value="" selected disabled>Select Blood Group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><br>
                                </div>

                                <div class="form-group">
                                    <label>Enter Location</label><br>
                                    <input class="form-control" type="text" name="address" required placeholder="Enter Bank Location"><br>
                                </div>

                                <div class="form-group">
                                    <label>Enter Contact Number</label><br>
                                    <input class="form-control" type="number" name="contact" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Blood Quantity</label><br>
                                    <input class="form-control" type="number" name="bloodqty" required><br>
                                </div>

                                <div class="form-group">
                                    <label>Collection Date</label><br>
                                    <input class="form-control" type="date" name="collection" required><br>
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                </div>
                            </div>

    </div>

   

    <?php

    if (isset($_POST['name'])) {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $weight = $_POST["weight"];
        $bloodgroup = $_POST["bloodgroup"];

        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $bloodqty = $_POST["bloodqty"];
        $collection = $_POST["collection"];

        include("database.php");
        //code after connection is successfull
        $query = "insert into blood(name,gender,dob,weight,bloodgroup,address,contact,bloodqty,collection) values ('$name','$gender','$dob','$weight','$bloodgroup','$address','$contact','$bloodqty','$collection')";
        $result = mysqli_query($conn, $query); //query executes

        if (!$result) {
            echo "ERROR";
        } else {
            echo " <div style='text-align: center'><h1>Blood Donation Details Has Been Listed. Thank You.</h1>";
            echo " <a href='annoucements.php' div style='text-align: center'><h3>Go Back</h3>";
        }
    }

    ?>

</body>
<br><br> <footer>
        <?php include("footer.php") ?>
    </footer>
</html>