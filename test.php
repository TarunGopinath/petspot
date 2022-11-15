<?php
   if(!isset($_COOKIE['name'])) {
     header('location: login.php');
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta
         name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no"
         />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>TEST</title>


      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="./js/ajax.js"></script>

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
            #chat2 .form-control {
            border-color: transparent;
            }
            #chat2 .form-control:focus {
            border-color: transparent;
            box-shadow: inset 0px 0px 0px 1px transparent;
            }
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .scrollbar-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
            }
            .scrollbar-deep-purple::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
            }
            .scrollbar-deep-purple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #512da8;
            }
            .scrollbar-deep-purple {
            scrollbar-color: #512da8 #F5F5F5;
            }
            .scrollbar-cyan::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
            }
            .scrollbar-cyan::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
            }
            .scrollbar-cyan::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #00bcd4;
            }
            .scrollbar-cyan {
            scrollbar-color: #00bcd4 #F5F5F5;
            }
            .scrollbar-dusty-grass::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
            }
            .scrollbar-dusty-grass::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
            }
            .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
            background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
            }
            .scrollbar-ripe-malinka::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
            }
            .scrollbar-ripe-malinka::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
            }
            .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
            background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
            }
            .bordered-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #512da8;
            }
            .bordered-deep-purple::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none;
            }
            .bordered-cyan::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #00bcd4;
            }
            .bordered-cyan::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none;
            }
            .square::-webkit-scrollbar-track {
            border-radius: 0 !important;
            }
            .square::-webkit-scrollbar-thumb {
            border-radius: 0 !important;
            }
            .thin::-webkit-scrollbar {
            width: 6px;
            }
            .example-1 {
            position: relative;
            overflow-y: scroll;
            height: 200px;
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
                  <img class="mt-5" src="./img/chats.png" alt="" style="height:19vw;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel wrapper -->
      </header>
      <!--Main Navigation-->
      <section style="background-color: #eee;">
         <div class="container py-5">
            <div class="row">
               <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                  <h5 class="font-weight-bold mb-3 text-center text-lg-start ms-1">Members</h5>
                  <div class="card">
                     <?php 
                        
                     ?>
                     <div class="card-body">

                        <ul class="list-unstyled mb-0" id="onlineMembersChat">

                           <div class="onlineChat">
                           </div>

                        </ul>

                     </div>
                  </div>
               </div>

               <?php 
                 if(isset($_COOKIE['pid']) and isset($_COOKIE['receiver'])) {
               ?>

               <div class="col-md-6 col-lg-7 col-xl-8">
                  <div class="card" id="chat2">
                     <div class="card-header d-flex justify-content-between align-items-center p-3">
                        <div class="container text-center">
                           <h4 class="mb-0 container text-center">
                              <?php echo $_COOKIE['receiverName']?>
                           </h4>
                        </div>
                        <!-- Primary -->
                        <div class="btn-group">
                           <button type="button" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                           <?php
                              if(!isset($_COOKIE['pid']))
                                echo 'Chat as';
                              else
                                echo $_COOKIE['pname'];
                            ?>
                           </button>
                           <ul class="dropdown-menu selectmsgpet">
                           </ul>
                        </div>
                     </div>

                     <!-- CHAT BODY -->
                     <div  class="example-1 scrollbar-deep-purple bordered-deep-purple thin chatBody"  
                        data-mdb-perfect-scrollbar="true" id="messagebox" style="position: relative; height: 400px" >
                     </div>

                     <!-- CHAT FOOTER -->
                     <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                        <form action="" method="post" class="col-md-12">
                           <div class="d-flex">
                              <input type="text" class="form-control form-control-lg inputMsg" id="exampleFormControlInput1"
                                 placeholder="Type message" name="message">
                              <button type="button" id="submitMsg" class="btn btn-primary px-3 rounded-circle"><i class="fas fa-paper-plane fa-lg"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>

               <?php
                  }
                  else {
               ?>

               <div class="col-md-6 col-lg-7 col-xl-8 text-center mt-5">
                  <h3>Select your pet and click on a chat to start texting!</h3>
                  <div class="btn-group mt-4">
                     <button type="button" id="startChatAsBtn" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                          <?php
                              if(!isset($_COOKIE['pid']))
                                echo 'Chat as';
                              else
                                echo $_COOKIE['pname'];
                            ?>
                        </button>
                     <ul class="dropdown-menu selectmsgpet">
                     </ul>
                  </div>
               </div>
               <?php
                  }
               ?>
            </div>
         </div>
      </section>
      <!-- FOOTER -->
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
      <script type="text/javascript"></script>
      <script>
         function scrolltobottom() {
           window.setInterval(function() {
                         var elem = document.getElementById('messagebox');
                         elem.scrollTop = elem.scrollHeight;
                         }, 5000);
         }
      </script>
   </body>
</html>