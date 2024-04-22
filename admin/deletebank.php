<html>

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
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Delete Bloodbank Details</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of Bloodbanks
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include("databaseconn.php");

						$qry="select * from bloodbank";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
						<th>Bank Name</th>
						<th>Email</th>
						<th>blood_needed</th>
						<th>location</th>
						
						<th><i class='fa fa-pencil'></i></th>
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['bank_name']."</td>
						  <td>".$row['email']."</td>
						  <td>".$row['blood_needed']."</td>
						  <td>".$row['location']."</td>
						  
						  <td><a href='finaldeletebank.php?bank_id=".$row['bank_id']."'><i class='fa fa-trash' style='color:red'></i></a></td>
						</tr>
						</tbody>";
						}

						?>
						</table>
									
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