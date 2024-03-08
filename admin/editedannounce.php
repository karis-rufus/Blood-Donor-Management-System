<!DOCTYPE html>
<html lang="en">

<head>

    <title>BDAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Announcement Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post">

					<?php
						include 'databaseconn.php';
							$annoucement = $_POST["annoucement"];    
							$bloodneed = $_POST["bloodneed"];
							$date = $_POST["date"];
							$bloodbank = $_POST["bloodbank"];
							$requirement = $_POST["requirement"];

							$id=$_POST['id'];
							//update query
							$qry = "update announce set annoucement='$annoucement', bloodneed='$bloodneed', date='$date', bloodbank='$bloodbank', requirement='$requirement' where id='$id'";
							$result = mysqli_query($conn,$qry); //query executes
							if(!$result){
								echo"ERROR". mysqli_error();
							}else {
								echo"The selected announcement has been updated.";
								// header ("Location:editblood.php");
							}
					?>

                                  </form>
                                </div>
                                
                            </div>
                        
                        </div>
                       
                    </div>
                   
                </div>
           
            </div>
         
        </div>
     
    </div>
  

  
    <script src="../vendor/jquery/jquery.min.js"></script>

   
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

   
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

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
