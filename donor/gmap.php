<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nearby Hospital</title>

        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .search-section iframe {
      margin-top: 30px;
    }

    #map {
      height: 550px;
      width: 100%;
    }
  </style>
</head>

<body>

  <!-- Page Content -->
  <div id="content">
    <!-- Navbar -->
    <?php include_once('../includes/donornav.php');?>
    <div class="wrapper">
   
      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4 text-center">Find Nearby Blood bank</h2>
        <!-- Nearby Search -->
        <section class="search-section">
          <div class="container align-items-center fs-1 flex-column">
            <form class="search-form">
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="locationInput" placeholder="Search for nearby blood banks..."
                  aria-label="Search" name="search_query">
              </div>
              <!-- Map container -->
              <div id="map"></div>
            </form>
          </div>
        </section>
      </div>
    </div>


    <script>
      // Initialize Google Maps API
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -1.2921, lng: 36.8219 }, // Default center (Nairobi)
          zoom: 15, // Default zoom level
        });

        // Initialize autocomplete for location input field
        const autocomplete = new google.maps.places.Autocomplete(
          document.getElementById("locationInput")
        );
        autocomplete.bindTo("bounds", map);

        // When a place is selected from autocomplete, update map center
        autocomplete.addListener("place_changed", () => {
          const place = autocomplete.getPlace();
          if (!place.geometry || !place.geometry.location) {
            alert("Place not found!");
            return;
          }
          map.setCenter(place.geometry.location);
        });

        // Function to search nearby places and plot them on the map
        function searchNearbyPlaces(location) {
          const service = new google.maps.places.PlacesService(map);
          service.nearbySearch(
            {
              location: location,
              radius: 5000, // Radius in meters (adjust as needed)
              type: "hospital", // Type of place to search for (e.g., hospital)
            },
            (results, status) => {
              if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (let i = 0; i < results.length; i++) {
                  createMarker(results[i]);
                }
              }
            }
          );
        }

        // Function to create a marker for a place and add it to the map
        function createMarker(place) {
          new google.maps.Marker({
            map,
            position: place.geometry.location,
            title: place.name,
          });
        }

        // When the user finishes typing the location and selects it, search nearby places
        google.maps.event.addListener(autocomplete, "place_changed", function () {
          const place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }
          searchNearbyPlaces(place.geometry.location);
        });
      }
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR7BbdZ2qfKXbH5STmcf6aGyJtdF9XRDw&libraries=places&callback=initMap"
      async defer></script>



    <!-- Bootstrap and JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

    <!-- Script to toggle sidebar -->
    <script>
      $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
</body>

</html>