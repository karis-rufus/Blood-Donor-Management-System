<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<?php require_once('database.php');  ?>
</head>
<body>
  
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
<i class='bx bx-menu'></i>
</button><h1 class="page-header text-center" id="offcanvasSecondaryNavbarLabel" ><i class="icofont-blood-drop"></i>Blood Donor
            Management System</h1>
            
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  <h5 class="offcanvas-title" id="offcanvasSecondaryNavbarLabel"><i class="icofont-blood-drop"></i>Blood Donor
            Management
            System</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
  </div>
  
  <div class="offcanvas-body"
     style="background-color:lavender;  ">
     <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
     <!-- Content here -->
  
       



            <li><a href="dashboard.php" style="margin:20px"><i class="fa fa-dashboard fa-fw"></i> DASHBOARD</a></li>
            <li><a href=annoucements.php style="margin:20px;"><i class="fa fa-bullhorn"></i> BLOOD REQUESTS</a></li>
            <li><a href=available.php style="margin:20px;"><i class="fa fa-heartbeat"></i> AVAILABLE_BLOOD</a></li>
            <li><a href=campagins.php style="margin:20px;"><i class="fa fa-flag"></i> CAMPAGINS</a></li>

            <li><a href=donate.php style="margin:20px;"><i class="fa fa-heartbeat"></i> DONATE_BLOOD</a></li>
            <li><a href=location.php style="margin:20px;"><i class='bx bxs-location-plus'></i> BANK_lOCATIONS</a></li>

          
          <ul>
            <!-- <li class="divider"></li> -->
            <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
</ul>
        </div>
    </div>
</div>
</body>
</html>
