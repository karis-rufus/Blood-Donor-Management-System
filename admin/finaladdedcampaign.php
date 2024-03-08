<!DOCTYPE html>
<html lang="en">

<head>

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
                    <h1 class="page-header">BBAS</h1>
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="post">

<?php
include("databaseconn.php");
$cname = $_POST["cname"];    
$oname = $_POST["oname"];
$phn = $_POST["phn"];
$cdate = $_POST["cdate"];
$descp = $_POST["descp"];
$id=$_POST['id'];

$qry = "update campagindb set cname='$cname', oname='$oname', phn='$phn', cdate='$cdate', descp='$descp' where id='$id'";
$result = mysqli_query($conn,$qry); 
if(!$result){
    echo"ERROR";
}else {
    echo"CAMPAIGN UPDATED";
   
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
