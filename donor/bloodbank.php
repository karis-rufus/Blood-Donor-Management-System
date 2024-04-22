<html><title>BDAS</title>

<head>
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<title>BDMS</title>
   <?php include("../includes/donornav.php")    ?>


<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
 <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
 
<!-- DataTables Responsive CSS -->
<link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">


<style>
        /* Optional: CSS for styling the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
		.page-header{
         margin-top: 30px;   
        }
		body {
        background-image: url();
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat; /* Optional: Prevents image from repeating */
      }
    </style>
</head>


<body>
<div id="wrapper">



<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Blood Bank Information</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of blood bank available
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<!-- result -->

					<?php 
					include('database.php');
					

					$query = " SELECT * FROM bloodbank WHERE location = '" . $_POST["location"]."' ";
					$result = mysqli_query($conn,$query);
					$count = mysqli_num_rows($result);

					if($count>=1){
						

						echo"
						<thead>
						<tr>
                        <th>bank_Id</th>
                        <th>bank_name</th>
                        <th>email</th>
                        
                        <th>blood_needed</th>
                        
                        
                        <th>location</th>
                        
                        <th>Donate</th>
						</tr>
						</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['bank_id']."</td>";
								echo "<td>".$row['bank_name']."</td>";
								echo "<td>".$row['email']."</td>";
								
								echo "<td>".$row['blood_needed']."</td>";
							

								echo "<td>".$row['location']."</td>";
								
						?>
							<td><a href="donate.php?bank_id=<?php echo $row['bank_id'] ?>">Donate</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?><br><br>
					<!-- result -->


	<button style="margin-left: 605px;background-color:cyan;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="location.php">Search Again</a></button>
	
 


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
