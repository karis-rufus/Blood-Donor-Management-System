<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                    <h1 class="page-header">Make Announcement</h1>
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
                                    <form role="form" action="makeannouncement.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Announcement Title</label>
                                            <input class="form-control" type="text" placeholder="Announcement Title" name="annoucement" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Blood Needed (Type)</label>
                                            <input class="form-control" type="text" placeholder="example: B+" name="bloodneed" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Date and Time</label>
                                            <input class="form-control" type="date" name="date" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Organized by</label>
                                                <input class="form-control" placeholder="Enter Organizer's Name" type="text" name="bloodbank" required>
                                            </div>

                                        <div class="form-group">
                                                <label>Requirements</label>
                                                <textarea class="form-control" rows="4" type="text" name="requirement" required></textarea>
                                            </div>
                                       
                                    
                                
                                        <button type="submit" style="border-radius: 0%" value="submit" class="btn-success btn btn-default">Submit</button>
                
                                    </form>
                                    <?php 

if(isset($_POST['annoucement'])){
$annoucement = $_POST["annoucement"];    
$bloodneed = $_POST["bloodneed"];
$date = $_POST["date"];
$bloodbank = $_POST["bloodbank"];
$requirement = $_POST["requirement"];

include ("databaseconn.php");
//code after connection is successfull
$qry = "insert into announce(annoucement,bloodneed,date,bloodbank,requirement) values ('$annoucement','$bloodneed','$date','$bloodbank','$requirement')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>ANNOUNCEMENT MADE</h1>";
    echo" <a href='index.php' div style='text-align: center'><h3>Go Back</h3>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


?>
                                 
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
