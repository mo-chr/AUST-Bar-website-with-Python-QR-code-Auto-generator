<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AUST Bar &amp; Restaurant | Free Bootstrap Website Template</title>
    <!-- Web app manifest -->
    <link rel='manifest' href='../manifest.json'>
    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d994108362.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Default stylesheet -->
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body id="top">
    <header>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand animated pulse" href="../index.html">
          <img src="../media/brand/logo-512x512.png" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="food.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="food.html">Food</a>
                <a class="dropdown-item" href="desserts.html">Desserts</a>
                <a class="dropdown-item" href="drinks.html">Drinks</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="album.html">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservations.html">Reservations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a class="nav-social mr-2" href="https://github.com/LadiciusLad"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="nav-social mr-2" href="https://github.com/LadiciusLad"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="nav-social" href="https://github.com/LadiciusLad"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <a class="nav-social" href="/pages/adminLogin.html"><i class="fab fa-sketch" aria-hidden="true"></i></i></a>
          </div>
        </div>
      </nav>
    </header>
    <main>

      <!-- GALLERY DESCRIPTION -->
      <div class="gallery-description container-fluid bg-dark text-white">
        <h1 id="title-1" class="special-title-1">DESSERTS GALLERY</h1>
        <h2 id="title-2" class="special-title-2">Delicious Sweet Treats</h2>
      </div>

      <!-- GALLERY LIGHTBOX -->
      <div id="lightbox" class="lightbox">
        <label id="close">✖</label>
        <div class="lightbox-content">
          <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-3.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-4.jpg" alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-5.jpg" alt="Fifth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-6.jpg" alt="Sixth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-7.jpg" alt="Seventh slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-8.jpg" alt="Eighth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../media/galleries/3x/gallery-desserts-9.jpg" alt="Ninth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <!-- GALLERY THUMBNAILS -->
      <div id="gallery-thumbnails" class="gallery-thumbnails bg-light">
        <div class="container">
          <div class="row">
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="0">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-1.jpg" srcset="../media/galleries/1x/gallery-desserts-1.jpg 1x, ../media/galleries/2x/gallery-desserts-1.jpg 2x, ../media/galleries/3x/gallery-desserts-1.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="1">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-2.jpg" srcset="../media/galleries/1x/gallery-desserts-2.jpg 1x, ../media/galleries/2x/gallery-desserts-2.jpg 2x, ../media/galleries/3x/gallery-desserts-2.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="2">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-3.jpg" srcset="../media/galleries/1x/gallery-desserts-3.jpg 1x, ../media/galleries/2x/gallery-desserts-3.jpg 2x, ../media/galleries/3x/gallery-desserts-3.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="3">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-4.jpg" srcset="../media/galleries/1x/gallery-desserts-4.jpg 1x, ../media/galleries/2x/gallery-desserts-4.jpg 2x, ../media/galleries/3x/gallery-desserts-4.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="4">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-5.jpg" srcset="../media/galleries/1x/gallery-desserts-5.jpg 1x, ../media/galleries/2x/gallery-desserts-5.jpg 2x, ../media/galleries/3x/gallery-desserts-5.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="5">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-6.jpg" srcset="../media/galleries/1x/gallery-desserts-6.jpg 1x, ../media/galleries/2x/gallery-desserts-6.jpg 2x, ../media/galleries/3x/gallery-desserts-6.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="6">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-7.jpg" srcset="../media/galleries/1x/gallery-desserts-7.jpg 1x, ../media/galleries/2x/gallery-desserts-7.jpg 2x, ../media/galleries/3x/gallery-desserts-7.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="7">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-8.jpg" srcset="../media/galleries/1x/gallery-desserts-8.jpg 1x, ../media/galleries/2x/gallery-desserts-8.jpg 2x, ../media/galleries/3x/gallery-desserts-8.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
            <div class="gallery-item col-md-4">
              <a href="#" data-slide-number="8">
                <img class="img-fluid rounded box-shadow border" src="../media/galleries/1x/gallery-desserts-9.jpg" srcset="../media/galleries/1x/gallery-desserts-9.jpg 1x, ../media/galleries/2x/gallery-desserts-9.jpg 2x, ../media/galleries/3x/gallery-desserts-9.jpg 3x" draggable="false" alt="Dessert">
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- GOOGLE MAP -->
     

    </main>

    <footer class="page-footer">
      <div class="container">
        <a class="navbar-brand animated pulse d-block text-center m-0 p-0" href="#">
          <img src="../media/brand/logo-light.svg" width="50" height="50" alt="Logo">
        </a>
        <div class="row">
          <div class="col-md-3">
            <h5 class="page-footer-title">OPENING HOURS</h5>
            <p class="mb-0">Open daily from 8am</p> 
            <p class="mb-0">Bar: Daily from 8am - 12pm</p> 
            <p class="mb-0">Breakfast: Daily from 8am - 11am</p> 
            <p class="mb-0">Lunch: Daily from 12pm - 3pm</p>
            <p>Dinner: Daily from 6pm - 12pm</p>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">LOCATION</h5>
            <address>
              AUST Bar &amp; Seafood Restaurant<br>
              Baalbek<br>
              Bekaa<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890<br>
              <abbr title="Email">E:</abbr> info@AUST.com
            </address>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">FOLLOW US</h5>
            <div class="mb-3">
              <a class="footer-social" href="https://github.com/LadiciusLad" aria-label="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a class="footer-social" href="https://github.com/LadiciusLad" aria-label="tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
              <a class="footer-social" href="https://github.com/LadiciusLad" aria-label="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-3 h-100 border-left-custom">
            <h5 class="page-footer-title mt-3 mt-md-0">NEWSLETTER</h5>
            <p>
              Complete the form to receive information on the latest events,
              news and special offers at AUST.
            </p>
            <form id="newsletter-form">
              <label class="sr-only" for="formEmail">Email</label>
              <input type="email" class="form-control form-control-sm rounded" id="formEmail" placeholder="name@example.com">
              <button type="submit" class="btn btn-sm btn-outline-light btn-block mt-2">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="page-footer-copyright container-fluid text-center">
        © 2022 AUST Bar &amp; Restaurant. All rights reserved.<br>
       
      </div>
    </footer>
    <a id="back-to-top" class="back-to-top smooth-scroll" href="#top">
      <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <script 
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous">
    </script>
    <!-- Lightbox -->
    <script>
      // Prevent carousel from automatically cycle
      $('#galleryCarousel').carousel({
        interval: false
      });
      var lightbox = false;
      $( "#gallery-thumbnails" ).on( "click", "a", function( event ) {
        event.preventDefault();
        if (lightbox === false) {
          lightbox = true;
          var slideNumber = $(this).attr("data-slide-number");
          $('#galleryCarousel').carousel(Number(slideNumber)); // Open particular carousel frame
          $("#lightbox").show();
        }
      });
      $("#close").click(function() {
        if (lightbox === true) {
          lightbox = false;
          $("#lightbox").hide();
        }
      });
    </script>
    <script src="../js/site.js"></script>
    <script src="../js/gallery-animations.js"></script>
  </body>
</html>