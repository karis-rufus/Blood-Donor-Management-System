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
                    <h1 class="page-header">Edit Campaign Details</h1>
                </div>
            
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of available campaign
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                <?php
									include("databaseconn.php");
									$id=$_GET['id'];
									$qry= "select * from campagindb where id='$id'";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
								?> 

                                    <form role="form" action="finaladdedcampaign.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Campaign Name</label>
                                            <input class="form-control" name="cname" type="text" value='<?php echo $row['cname']; ?>' required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Organizer Name</label>
                                            <input class="form-control" type="text" name="oname" value='<?php echo $row['oname']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="number" name="phn" value='<?php echo $row['phn']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Campaign Date</label>
                                            <input class="form-control" type="date" name="cdate" value='<?php echo $row['cdate']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
											 <textarea class="form-control" rows="4" name="descp" type="text" required><?php echo $row['descp']; ?></textarea>
                                        </div>


                                       
             <!-- id hidden grna input type ma "hidden" -->
             <input type="hidden" name="id" value="<?php echo $row['id'];?>">      

                             <button type="submit"  class="btn btn-success">Make Changes</button>
                
                                   </form> 

                                </div>

<?php
}
?>
                                
                            </div>
                          
                        </div>
                     
                    </div>
               
                </div>
            
            </div>
        
        </div>
    
    </div>
  

  
    <script src="../vendor/jquery/jquery.min.js"></script>

    
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
>
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
                             