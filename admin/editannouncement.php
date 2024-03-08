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
                    <h1 class="page-header">Edit Announcement Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of announcement made
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

								<?php
									include 'databaseconn.php';
									$id=$_GET['id'];
									$qry= "select * from announce where id='$id'";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
								?> 

                                    <form role="form" action="editedannounce.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Announcement Title</label>
                                            <input class="form-control" name="annoucement" type="text" value='<?php echo $row['annoucement']; ?>' required>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Blood Needed (type)</label>
                                            <input class="form-control" type="text" name="bloodneed" value='<?php echo $row['bloodneed']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Date and Time</label>
                                            <input class="form-control" name="date" type="date" value='<?php echo $row['date']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                                <label>Organized by</label>
                                                <input class="form-control" type="text" name="bloodbank" value='<?php echo $row['bloodbank']; ?>' required>
                                            </div>

                                        <div class="form-group">
                                                <label>Requirements</label>
                                                <textarea class="form-control" rows="4" name="requirement" type="text" required><?php echo $row['requirement']; ?></textarea>
                                            </div>
                                       
                                     <!-- id hidden grna input type ma "hidden" -->
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
                                
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

</html>
