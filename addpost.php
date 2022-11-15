<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"  
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link rel="icon" href="./img/petspot-white.png" type="image/x-icon" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--Main Navigation-->
    <header>
      <style>
        #intro {
          background-image: url(./img/puppies.jpg);
          height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #intro {
            margin-top: -58.59px;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <!-- Navbar -->

      <!-- Background image -->
      <div id="intro" class="bg-image shadow-2-strong">
        <div
          class="mask d-flex align-items-center h-100"
          style="background-color: rgba(0, 0, 0, 0.6)"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-md-8">
                <form
                  class="bg-white rounded shadow-5-strong p-5"
                  action="./includes/addpost.inc.php"
                  method="post"
                  enctype="multipart/form-data"
                >
                  <div class="row justify-content-center">
                    <img
                      class="mb-5"
                      src="./img/petspot-black.png"
                      alt=""
                      style="height: 40px; width: 200px"
                    />
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="form3Example1"
                          class="form-control"
                          name="title"
                        />
                        <label class="form-label" for="form3Example1"
                          >Title</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="form3Example1"
                          class="form-control"
                          name="info"
                        />
                        <label class="form-label" for="form3Example1"
                          >Info</label
                        >
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="form3Example1"
                          class="form-control"
                          name="ps"
                        />
                        <label class="form-label" for="form3Example1"
                          >P.S</label
                        >
                      </div>
                    </div>
                  </div>  

                  <div class="form-outline mb-4">
                    <input
                      type="date"
                      id="form6Example4"
                      class="form-control"
                      name="date"
                    />
                    <label class="form-label" for="form6Example4"
                      >Date</label
                    >
                  </div>

                  <div class="form-outline mb-4">
                    <input
                      type="time"
                      id="form6Example4"
                      class="form-control"
                      name="time"
                    />
                    <label class="form-label" for="form6Example4"
                      >Time</label
                    >
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="form3Example1"
                          class="form-control"
                          name="venue"
                        />
                        <label class="form-label" for="form3Example1"
                          >Venue</label
                        >
                      </div>
                    </div>
                  </div>

                  <!-- Number input -->
                  <div class="form-outline mb-4">
                    <input
                      type="number"
                      id="form6Example6"
                      class="form-control"
                      name="price"
                    />
                    <label class="form-label" for="form6Example6">Price</label>
                  </div>

                  <label class="form-label" for="customFile">Upload image</label>
                  <input type="file" class="form-control" id="customFile" name="image"/>

                  <!-- Submit button -->
                  <button
                    type="submit"
                    class="btn btn-primary btn-block mt-4"
                    name="submit"
                  >
                    Add post
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <?php 
      if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo '<p class = "text-white text-center">Fill in all fields!</p>';
        }
        else if($_GET["error"] == "pwdmatchfail") {
          echo '<p class = "text-white text-center">The passwords entered do not match!</p>';
        }
        else if($_GET["error"] == "emailerror") {
          echo '<p class = "text-white text-center">User with the same email/phone already exists!</p>';
        }
        else if($_GET["error"] == "stmtfail") {
          echo '<p class = "text-white text-center">Something went wrong! Please try again</p>';
        }
        else if($_GET["error"] == "userstmtfail") {
          echo '<p class = "text-white text-center">Something went wrong! Please try again</p>';
        }
        else if($_GET["error"] == "none") {
          echo '<p class = "text-white text-center">You have signed up!</p>';
        }
      }
    ?>

    <!--Footer-->
    <footer class="bg-light text-lg-start">
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
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
