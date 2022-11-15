<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Services</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
      #map {
        height: 100%;
      }

      /* 
 * Optional: Makes the sample page fill the window. 
 */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 30vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url("./img/carousel-1.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <!-- Navbar -->
      <nav
        class="navbar navbar-expand-lg navbar-dark d-none d-lg-block"
        style="z-index: 2000; margin: 0; padding: 0"
      >
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a
            class="navbar-brand nav-link"
            target="_blank"
            href="http://localhost/petspot/"
          >
            <img
              src="./img/petspot-white.png"
              alt=""
              style="height: 40px; margin: 0; padding: 0"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./test.php">Chats</a>
              </li>7
              <li class="nav-item">
                <a class="nav-link" href="./petbook.php">PetBook</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./experiences.php">Experiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./services.php">Services</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./contact.php"
                  >Contact</a
                >
              </li>
            </ul>

            <ul class="navbar-nav list-inline">
              <!-- Icons -->
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.facebook.com/mdbootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://twitter.com/MDBootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                  <?php 
                if(isset($_COOKIE["name"])) { ?>
                
                  <div class="dropdown">
                    <button
                      class="btn btn-light dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <?php echo $_COOKIE['name']; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="./pets.php">Pets</a></li>
                      <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="./includes/logout.inc.php">Logout</a></li>
                    </ul>
                  </div>
            
                <?php } else {
                ?>
                  <a class="nav-link" href="./login.php" rel="nofollow"></a>
                  <i class="fa-regular fa-user"></i>
                  <?php } ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Carousel wrapper -->
      <div
        id="introCarousel"
        class="carousel slide carousel-fade shadow-2-strong"
        data-mdb-ride="carousel"
      >
        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.7)">
              <div
                class="d-flex justify-content-center align-items-center h-100"
              >
                <div class="text-white text-center">
                  <img class="mt-5" src="./img/services.png" alt="" style="height:19vw;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->
    <div class="text-center m-5">
    <button type="button" id="locationButton" class="btn btn-primary btn-rounded">Share my location</button>
    </div>

    <script type="text/javascript">

      var info = document.getElementById('info');
      const loc = document.getElementById('locationButton');
      loc.addEventListener('click', ()=> {
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
      });

      function onSuccess(position) {
        let {latitude, longitude} = position.coords;
        console.log(latitude, longitude);
        fetch(`https://api.opencagedata.com/geocode/v1/json?q=${latitude}+${longitude}&key=b8674384098343d9b095402759379a4f`)
        .then(response => response.json()).then(result => printMap(result));
      }

      function printMap(result) {
        console.log(result['results'][0]);
        $('#info').append(
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("Latitude"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['annotations']['DMS']['lat'])
          ),
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("Longitude"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['annotations']['DMS']['lng'])
          )
          ,
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("State"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['components']['state'])
          ),
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("District"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['components']['state_district'])
          ),
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("County"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['components']['county'])
          ),
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("Pincode"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['components']['postcode'])
          ),
          $('<tr></tr>').append(
            $('<th></th>').attr('scope','row').text("Address"),
            $('<th></th>').attr('scope','row').text(":"),
            $('<td></td>').text(result['results']['0']['formatted'])
          )
          
        );
      }

      function onError(error) {
        console.log(error);
      }
    </script>

    <div class="d-flex" >
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody id="info">
          </tbody>
        </table>
      </div>
    </div>

    <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script>
      Object.defineProperty(exports, "__esModule", { value: true });
      var map;
      var service;
      var infowindow; 
      
      function initMap() {
        var sydney = new google.maps.LatLng(12.8406, 80.1534);
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById("map"), {
          center: sydney,
          zoom: 15,
        });
        var request = {
          query: "Museum of Contemporary Art Australia",
          fields: ["name", "geometry"],
        };
        service = new google.maps.places.PlacesService(map);
        service.findPlaceFromQuery(request, function (results, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK && results) {
            for (var i = 0; i < results.length; i++) {
              createMarker(results[i]);
            }
            map.setCenter(results[0].geometry.location);
          }
        });
      }
      function createMarker(place) {
        if (!place.geometry || !place.geometry.location) return;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
        });
        google.maps.event.addListener(marker, "click", function () {
          infowindow.setContent(place.name || "");
          infowindow.open(map);
        });
      }
      window.initMap = initMap;
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMWgutw7-hs-KSLtfZzQAmw_WkeYC0rgQ&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>

    <!-- Footer-->
    <footer class="bg-light text-lg-start mt-3">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">petspot.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
  </body>
</html>
