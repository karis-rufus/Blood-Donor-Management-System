<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDAS</title>

  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">


    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <style>
       
        body {
            font-family: Arial, sans-serif;
            background-image: url('admin/img/page.jpg'); 
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
            text-align: center;
        }

        p {
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    
    

</head>

<body >
    
<?php include("header.html")    ?>


    <div id="wrapper
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Donor's Dashboard
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="icofont-blood icofont-5x"></i>
                                    <!-- <i class="fa fa-heartbeat fa-5x"></i> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- in order to count total donor's record -->
                                   
                                    
                                    <div>Available Blood</div>
                                </div>
                            </div>
                        </div>
                        <a href="available.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Available Blood Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-flag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     
                                <!-- in order to count total donor's record -->
                                       

                                    <!-- <div class="huge">26</div> -->
                                    <div>Campaigns Made</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="campagins.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Available Campaigns</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bullhorn fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                               
                                    <div class="huge"> </div>
                                    <div>Announcement</div>
                                </div>
                            </div>
                        </div>
                        <a href="annoucements.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Announcement Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="icofont-blood-drop icofont-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Donate</div>
                                    <div>Blood</div>
                                </div>
                            </div>
                        </div>
                        <a href="donate.php">
                            <div class="panel-footer">
                                <span class="pull-left">Donate Blood Now!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <i class="bx bxs-location-plus"></i>
                                </div>
            <div class="col-xs-9 text-right">
                               
                               <div class="huge"> </div>
                               <div>Bank Location</div>
                           </div>
                       </div>
                   </div>
                   <a href="location.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Blood Banks</span>
                           <span class="pull-right"><i class='bx bxs-location-plus'></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
          
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="collum">
          
	</div>
</div>
           
        </div>
       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body><br>
<br>
<br>
<br><br>
<br>
<br>
<br>

<br><br><br><br><br><br><br><br><footer>
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
