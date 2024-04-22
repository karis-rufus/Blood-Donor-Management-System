<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDAS</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
	
	<style>
        .body {
           
           background-image: url('admin/img/page.jpg'); 
           background-size: cover;
          
       }
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
        
    </style>
</head>

   <?php include("../includes/donornav.php") 
   ?>
      <?php require_once('database.php'); ?>

<body>
    
<div id="wrapper">
    
<div id="page-wrapper">

<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
    <h1 class="page-header">Emergency Annoucements</h1><br>
</div>
</div>
<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
    <h3>Total number of announcements made:</h3>
    </div>
								

<table>
<?php
include("database.php");
$query="select * from announce";
						$result=mysqli_query($conn,$query);


						echo"
						<thead>
												
						<tr>
							<th>Annoucement</th><br>
							<th>Blood_Needed</th>
							<th>Announcement Date</th>
							<th>Organizer</th>
							<th>Requirements</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['annoucement']."</td>
						  <td>".$row['bloodneed']."</td>
						  <td>".$row['date']."</td>
						  <td>".$row['bloodbank']."</td>
						  <td>".$row['requirement']."</td>

						</tr>
						</tbody>";
						}
                        mysqli_close($conn);
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

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
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
<?php   include("footer.php") ;    ?>