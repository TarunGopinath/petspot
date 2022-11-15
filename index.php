<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Petspot</title>
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
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url("./img/carousel-1.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        .carousel-item:nth-child(2) {
          background-image: url("./img/carousel-2.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        .carousel-item:nth-child(3) {
          background-image: url("./img/carousel-3.jpg");
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
                  <a class="nav-link" href="./login.php" rel="nofollow">
                  <i class="fa-regular fa-user"></i>
                </a>
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
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li
            data-mdb-target="#introCarousel"
            data-mdb-slide-to="0"
            class="active"
          ></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
              <div
                class="d-flex justify-content-center align-items-center h-100"
              >
                <div class="text-white text-center">
                  <h1 class="mb-3">Introduce your pet to a whole new world!</h1>
                  <h5 class="mb-4">
                    Join a vibrant community of pet owners today!
                  </h5>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                    role="button"
                    rel="nofollow"
                    target="_blank"
                    >Know more</a
                  >
                  <?php if(!isset($_COOKIE["name"])) { ?>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="./login.php"
                    role="button"
                    >Login</a
                  >
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
              <div
                class="d-flex justify-content-center align-items-center h-100"
              >
                <div class="text-white text-center">
                  <h2>New experiences, excitement and enrichment</h2>
                  <h5 class="mb-4 mt-3">
                    Petspot provides you with abundant resources to help you<br />
                    and your pet lead a fulfilled wholesome life
                  </h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div
              class="mask"
              style="
                background: linear-gradient(
                  45deg,
                  rgba(250, 196, 60, 0.4),
                  rgba(255, 255, 255, 0.4) 100%
                );
              "
            >
              <div
                class="d-flex justify-content-center align-items-center h-100"
              >
                <div class="text-white text-center">
                  <h2>Now there's only only one thing left to do!</h2>
                  <?php if(!isset($_COOKIE["name"])) { ?>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/"
                    target="_blank"
                    role="button"
                    >Login</a
                  >
                  <?php } else { 
                    ?>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/"
                    target="_blank"
                    role="button"
                    >Explore</a
                  >
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a
          class="carousel-control-prev"
          href="#introCarousel"
          role="button"
          data-mdb-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#introCarousel"
          role="button"
          data-mdb-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->

    <main class="mt-5">
      <div class="container text-center">
        <?php if(isset($_COOKIE["name"])) { ?>
        <h3 class="mb-6">
          Welcome,
          <?php echo $_COOKIE["name"]; } ?>
        </h3>
      </div>

      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div
                class="bg-image hover-overlay ripple shadow-2-strong"
                data-mdb-ripple-color="light"
              >
                <img src="./img/home-1.jpg" class="img-fluid" />
                <a href="#!">
                  <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.15)"
                  ></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>Why petspot?</strong></h4>
              <p class="text-muted">
                Connect with fellow pet owners and their fur babies near you.
                Explore the world of play dates, paw parties, petcations and
                more! Find validated toy stores, veternarians, pet spas and
                pet-friendly cafes so you know exactly the best spot to treat
                your precious child!
              </p>
              <p><strong>Exciting offers, rewards and more!</strong></p>
              <p class="text-muted">
                Use petspot and earn free vouchers, coupons and reward points
                with your favorite haunts, by bringing about change in the
                community, creating a close knit group of social pets which
                ensures a healthier lifestyle for them and a detox for you too!
              </p>
              <a
                class="btn btn-outline-dark btn-lg m-2"
                href="https://mdbootstrap.com/docs/standard/"
                target="_blank"
                role="button"
                >Join now</a
              >
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h2 class="mb-5">
            <img
              src="./img/petspot-black.png"
              alt=""
              style="height: 40px"
            />HIGHLIGHTS
          </h2>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light"
                >
                  <img
                    src="./img/petparty.jpg"
                    class="img-fluid"
                    style="height: 45vh"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Paw Parties</h5>
                  <p class="card-text">
                    Get invited to paw parties in your area and give your fur
                    baby the time of their life!
                  </p>
                  <a href="#!" class="btn btn-primary mt-2">Check it out</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light"
                >
                  <img
                    src="./img/petspa.jpg"
                    class="img-fluid"
                    style="height: 45vh"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Pet Wellness</h5>
                  <p class="card-text">
                    Choose from the best rated spas, vetenarians and canals near
                    you and spoil your children!
                  </p>
                  <a href="#!" class="btn btn-primary mt-2">Check it out</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light"
                >
                  <img
                    src="./img/petwalking.jpg"
                    class="img-fluid"
                    style="height: 45vh"
                  />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"
                    ></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Pet Services</h5>
                  <p class="card-text">
                    Access to professional dog walkers, trainers and
                    doggysitters to help you raise your pet in comfort!
                  </p>
                  <a href="#!" class="btn btn-primary mt-2">Check it out</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />
        <?php
        if(isset($_GET['querymail'])) {
          if($_GET['querymail']==='sent') {
            echo '
            <script>
              alert("Email sent successfully");
            </script>';
          }
        }   
          ?>
        <!--Section: Content-->
        <section class="mb-5">
          <h4 class="mb-5 text-center">
            <strong
              >ASK
              <img src="./img/petspot-black.png" alt="" style="height: 30px" />
              !</strong
            >
          </h4>

          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <form 
              method="post"
              action="enquiremail.inc.php"
              >
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email"/>
                  <label class="form-label" for="form3Example3"
                    >Email address</label
                  >
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4" class="form-control" name="query"/>
                  <label class="form-label" for="form3Example4"
                    >Type your query</label
                  >
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                    checked
                  />
                  <label class="form-check-label" for="form2Example3">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="send">
                  Send
                </button> 

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button
                    type="button"
                    class="btn btn-primary btn-floating mx-1"
                  >
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-floating mx-1"
                  >
                    <i class="fab fa-google"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-floating mx-1"
                  >
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button
                    type="button"
                    class="btn btn-primary btn-floating mx-1"
                  >
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!--Section: Content-->
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

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">petspot.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    
  </body>
</html>
