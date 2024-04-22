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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<?php  include("../includes/donornav.php");   ?>
   
</head>
<body>



    
     <?php include('database.php'); ?>




	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="bloodbank.php" method="post" class="form-group">
						<h3>Select your location to view nearby blood bank</h3>
						<h3>Use Google Map</h3><a href="gmap.php"><i class='bx bxs-map'></i></a>
						<br><br><br><br><br><br>

					<label>
						 Location:<select name="location" type="text" style="width: 110px;margin-right: 175px;">
												<option>-Select-</option>
												<option>Kiserian</option>
												<option>Gataka</option>
												<option>karen</option>
												<option>Hardy</option>
												<option>Mamba</option>
                                                <option>Rongai</option>
												<option>Uptown</option>
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>



</body>
</html>
















<?php   include("footer.php");  ?>