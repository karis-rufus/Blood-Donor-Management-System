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
    <?php  include("header.html");   ?>
   
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Example</title>
    <!-- Import Google Maps API script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE"></script>
    <style>
        /* Style the map container */
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Map Example</h1>

    <!-- Map container -->
    <div id="map"></div>

    <script>
        // Initialize and display the map
        function initMap() {
            // Specify coordinates for the center of the map
            var center = { lat: 40.7128, lng: -74.0060 };

            // Create a new map object centered at the specified coordinates
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12, // Adjust the initial zoom level
                center: center
            });

            // Optionally, you can add markers to the map
            var marker = new google.maps.Marker({
                position: center,
                map: map,
                title: 'New York City' // Marker title
            });
        }
    </script>

    <!-- Call the initMap function when the page loads -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&callback=initMap">
    </script>
</body>
</html>















<?php   include("footer.php");  ?>