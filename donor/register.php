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
    <style>  body {
            font-family: Arial, sans-serif;
            background-image: url('../admin/img/gro.jpg'); 
            background-size: cover;
            margin: 0;
            padding: 0;
        }</style>


</head>

<body>

    <div id="wrapper">



        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Donor's Registration</h1>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <form action="register.php" method="post">

<div class="form-group">
    <label>Enter Full Name</label>
    <input class="form-control" name="name" type="text" placeholder="Example: Dan Wema" pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces" required>
</div>

<div class="form-group">
    <label>Gender [ M/F ]</label>
    <input class="form-control" placeholder="M or F" name="gender" required>
</div>

<div class="form-group">
    <label>Enter D.O.B</label>
    <input class="form-control" type="date" name="dob" required>
</div>

<div class="form-group">
    <label>Enter Weight</label>
    <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
</div>

<div class="form-group">
    <label>Enter Blood Group</label>
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
    </select>
</div>

<div class="form-group">
    <label>Enter Email Id</label>
    <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
</div>

<div class="form-group">
    <label>Enter Address</label>
    <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
</div>

<div class="form-group">
    <label>Enter Contact Number</label>
    <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
</div>

<div class="form-group">
    <label>Enter Username</label>
    <input class="form-control" placeholder="Enter Here" name="username" required>
    <p class="help-block">In order to create donor's account.</p>
</div>

<div class="form-group">
    <label>Enter Password</label>
    <input class="form-control" name="password" type="password" id="myInput" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" onclick="myFunction()">Show Password
        </label>
    </div>
</div>

<button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%;">Submit Form</button>
</form>




                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#"  class="ml-2" style="text-decoration:none">Sign Up</a>
					</div> -->
    <div class="d-flex justify-content-center links">
        <a href="../index.php" style="text-decoration:none; color: white"> Have an account? Login</a>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php include('database.php'); ?>
<?php require_once('database.php'); ?>
<?php 

if(isset($_POST['name'])){
$name = $_POST["name"];    

$gender = $_POST["gender"];
$dob = $_POST["dob"];
$weight = $_POST["weight"];
$bloodgroup = $_POST["bloodgroup"];
$email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$username = $_POST["username"];
$password = $_POST["password"];

//code after connection is successfull
$qry = "insert into donor(name,gender,dob,weight,bloodgroup,email,address,contact,username,password) values ('$name','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact', '$username', '$password')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
    echo" <a href='../index.php' div style='text-align: center'><h3>Go Back</h3>";

}

}


?>



<footer>
    <p>&copy; <?php echo date("Y"); ?>: Developed By Rufus</p>
</footer>

<style>
footer {
    background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
</style>

</html>