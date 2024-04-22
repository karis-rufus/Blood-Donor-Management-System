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
            <h1 class="page-header">Edit BloodBank Detail</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Total Records of bloodbanks
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                        <?php
                            include 'databaseconn.php';
                            $bank_id=$_GET['bank_id'];
                            $qry= "select * from bloodbank where bank_id='$bank_id'";
                            $result=mysqli_query($conn,$qry);
                            while($row=mysqli_fetch_array($result)){
                        ?> 

                            <form role="form" action="editedbank.php" method="post">
                             
                            <div class="form-group"><label for="bank_name">Bank Name:</label>
    <input  class="form-control" type="text" id="bank_name" name="bank_name" value='<?php echo $row['bank_name']; ?>' required><br>
                                        </div>
    
    <div class="form-group">
    <label for="email">Email:</label>
    <input  class="form-control" type="email" id="email" name="email" value='<?php echo $row['email']; ?>' required><br></div>
    <div class="form-group">
    <label for="blood_needed">Blood Needed:</label>
    <input class="form-control" type="text" id="blood_needed" name="blood_needed" rvalue='<?php echo $row['blood_needed']; ?>' required><br></div>
    <div class="form-group">
    <label for="location">Location:</label>
    <input class="form-control" type="text" id="location" name="location" reqvalue='<?php echo $row['location']; ?>' required><br></div>
    
    

                               
                             <!-- id hidden grna input type ma "hidden" -->
    <input type="hidden" name="bank_id" value="<?php echo $row['bank_id'];?>"> 
                        
                                <button type="submit" class="btn btn-success">Make Changes</button>
        
                            </form>
                        </div>

                    
                        <?php
}
?>            
                        </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
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


