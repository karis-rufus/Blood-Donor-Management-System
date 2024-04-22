<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDAS</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	
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
        background-image: url;
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat; /* Optional: Prevents image from repeating */
      }
    </style>
</head>
<body>
<?php include("../includes/donornav.php")    ?>
<body>
<div id="wrapper">

<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Campaign Details</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available campaign
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include("database.php");

						$query="select * from campagindb";
						$result=mysqli_query($conn,$query);


						echo"
						<thead>
												
						<tr>
						<th>Campaign Name</th>
						<th>Organizer Name</th>
						<th>Phone Number</th>
						<th>Date of campaign</th>
						<th>Description</th>
					</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['cname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['phn']."</td>
						  <td>".$row['cdate']."</td>
						  <td>".$row['descp']."</td>

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
</body>
</html>


















	
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

<?php   include("footer.php");  ?>