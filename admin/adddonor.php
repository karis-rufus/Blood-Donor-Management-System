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


    <?php include 'includes/nav.php'?>
</head>

<body>

    <div id="wrapper">



        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Donor's Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  action="adddonor.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="Example:Dan Wema" required>
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
                                            <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
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

                                        <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%";>Submit Form</button>

                
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
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>
<?php include('databaseconn.php'); ?>
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
    echo" <a href='dashboard.php' div style='text-align: center'><h3>Go Back</h3>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


?>
                                    
                                

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Rufus</p>
    </footer>
	
	<style>
	footer{
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
