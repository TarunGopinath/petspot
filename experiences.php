<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Experiences</title>
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
              </li>
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
                  <img class="mb-2" src="./img/experiences.png" alt="" style="height:20vw;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->
    
     <!-- Jumbotron -->
     <div id="intro" class="p-5 text-center bg-light">
      
      <a class="btn btn-primary m-2" href="./addpost.php" role="button" rel="nofollow">Add post</a>
        <button
            type="button"
            class="btn btn-primary m-2 dropdown-toggle"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Sort
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="petbook.php?sort=date" name="sortdate"
                >Date</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="petbook.php?sort=price" name="sortprice"
                >Price</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="petbook.php?sort=dogs" name="sortdogs"
                >Dogs</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="petbook.php?sort=cats" name="sortcats"
                >Cats</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="petbook.php?sort=birds" name="sortbirds"
                >Birds</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="petbook.php?sort=mammals" name="sortmammals"
                >Mini mammals</a
              >
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="petbook.php">Clears sort</a></li>
          </ul>
        
    </div>
    <!-- Jumbotron -->

     <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Content-->
          <section>
          <?php 
                require_once('./includes/conn.inc.php');
                $query="SELECT * FROM exp";
                $result = mysqli_query($conn, $query); 
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck >0) { 
                  while($row = mysqli_fetch_assoc($result)) {
          ?>
            <!-- Post -->
            <div class="row mb-3">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light" style="object-fit:cover; height:290px">
                  <img 
                  <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'; ?> 
                  class="img-fluid" 
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5><?php echo $row['title']?></h5>
                <p>
                  <?php echo $row['info']?>
                </p>
                <p>
                  P.S.  
                  <?php echo $row['ps']?>
                </p>
                <p>
                  Date: 
                  <?php echo $row['date']?>
                  Time: 
                  <?php echo $row['time']?>
                </p>
                <p>
                  Venue: 
                  <?php echo $row['venue']?>
                  Price: 
                  <?php echo $row['price']?>
                </p>
                <form action="./testmail.inc.php?eid=<?php echo $row['eid']?>" method="post"> 
                <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light" style="object-fit:cover; height:290px">
                  <img 
                  <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'; ?> 
                  class="img-fluid" 
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5><?php echo $row['title']?></h5>
                <p>
                  <?php echo $row['info']?>
                </p>
                <p>
                  P.S.  
                  <?php echo $row['ps']?>
                </p>
                <p>
                  Date: 
                  <?php echo $row['date']?>
                  Time: 
                  <?php echo $row['time']?>
                </p>
                <p>
                  Venue: 
                  <?php echo $row['venue']?>
                  Price: 
                  <?php echo $row['price']?>
                </p>

                <form action="./testmail.inc.php?eid=<?php echo $row['eid']?>" method="post"> 
                <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light" style="object-fit:cover; height:290px">
                  <img 
                  <?php echo 'src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'; ?> 
                  class="img-fluid" 
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5><?php echo $row['title']?></h5>
                <p>
                  <?php echo $row['info']?>
                </p>
                <p>
                  P.S.  
                  <?php echo $row['ps']?>
                </p>
                <p>
                  Date: 
                  <?php echo $row['date']?>
                  Time: 
                  <?php echo $row['time']?>
                </p>
                <p>
                  Venue: 
                  <?php echo $row['venue']?>
                  Price: 
                  <?php echo $row['price']?>
                </p>

                <form action="./testmail.inc.php?eid=<?php echo $row['eid']?>" method="post"> 
                <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
            </div>
            <?php } }?>
            <!-- Post -->

            <?php
        if(isset($_GET['regmail'])) {
          if($_GET['querymail']==='sent') {
            echo '
            <script>
              alert("Registration successful");
            </script>';
          }
        }   
          ?>
            
          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay ripple mb-4">
                <img
                  src='./img/bluecross.jpeg'
                  class="img-fluid" />
                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>
              <h5>FEATURED</h5>

              <p>
                Join us for the Annual Blue Cross Adoption drive on 22/10/2022 (Saturday) at Beasant Nagar Beach.
              </p>
              <a role="button" class="btn btn-primary" href="https://bluecrossofindia.org/"
                target="_blank">Know more</a>
            </section>
            <!--Section: Ad-->

            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Watch this video</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/Dq8RFIe9_sg"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

     
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
    <footer class="bg-light text-lg-start">
      <div class="py-4 text-center"></div>

      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
        <p>
          Follow
          <img src="./img/petspot-black.png" alt="" style="height: 20px" /> on
          social media
        </p>
        <a
          href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-youtube"></i>
        </a>
        <a
          href="https://www.facebook.com/mdbootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="https://twitter.com/MDBootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-twitter"></i>
        </a>
        <a
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-github"></i>
        </a>
      </div>

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
    <script type="text/javascript" src="js/experiences.js"></script>
  </body>
</html>
