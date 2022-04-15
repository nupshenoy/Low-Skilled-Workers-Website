<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" href= "stylinghomepage.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>Scheppa Homepage</title>
  <style>
    .card-img-top {
      width: 17vw;
      background-size: cover;
      background-color: white;
      margin-left: 20%;
      border-radius: 100%;
      height: 17vw;
      margin-top: 25px;


    }

    html,
    body {
      margin: 0;
      padding: 0;
    }


    .nav-item a {
      color: black;
      text-decoration: none;
      font-size: 18px;
      margin-right: 40px;
    }

    .nav-item .dropdown-menu a:hover {
      color: white;
      background-color: rgb(218, 143, 6);

    }


    footer {
      transition-timing-function: linear;
      transition-property: border-color;
      transition-duration: 0ms;
      background-color: black;
      padding: 20px;
      color: white;
      font-size: small;
      text-align: center;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      padding: 20px;
    }

    footer a {
      color: white;
    }

    footer a:hover {
      color: #40b6ff;
    }

    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }


    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 40rem;
      background: #000;
      color: white;
      position: relative;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: centre;
      background-size: cover;
      opacity: 0.8;
    }

    .container {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 25px;

    }

    .carousel-caption {

      color: white;
    }

    .heading {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;
      padding-left: 15px;
      text-align: center;
      margin-bottom: 15px;
      padding-bottom: 30px;
    }

    .container {
      margin-bottom: 0.5in;
    }

    .card-text {
      text-align: justify;
      font-size: large;
    }

    /*navbar*/
    .bg-custom-1 {
      background-color: black;
    }

    .navbar-nav .nav-item .nav-link:hover {
      color: rgb(218, 143, 6) !important;
    }

    button {
      margin-top: 13px;
      margin-bottom: 10px;
      background-color: white;
      border: 1px solid black;
      border-radius: 5px;
      padding: 10px;
    }

    button a {
      color: black;
      text-decoration: none;
    }

    button a:hover {
      color: white;
    }

    button:hover {
      background-color: black;

      transition: .5s;
      cursor: pointer;
    }

    .navbar-nav .nav-item .nav-link {
      color: white;
      text-decoration: none;
      font-size: 18px;
      margin-right: 40px;
      text-shadow: 2px 2px 4px #000000;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-custom-1" style="height:100px;">

    <div class="container-fluid">
      <!-- Links -->
      <a class="navbar-brand" href="home-profile.php" style="color: white; text-decoration: none; font-size: 40px; font-weight: 600; text-shadow: 2px 2px 4px #000000; padding: 8px 10px;">Scheppa</a>
      <div class="navbar-collapse collapse" id="navbarCustom">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home-profile.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="beauticians.php">Beauticians</a></li>
              <li><a class="dropdown-item" href="lowskill.php">Low Skilled Workers</a></li>
              <li><a class="dropdown-item" href="compspl.php">Computer Specialists</a></li>
              <li><a class="dropdown-item" href="artcomm.php">Art Commissioners</a></li>
              <li><a class="dropdown-item" href="designers.php">Designers</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profilepage.php">MyProfile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay-image" style="background-image: url(./carp.jpg.jpg);">
        </div>
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" />
        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Select the service you need.</h1>
            <p>Bringing our services at your doorstep.</p>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image" style="background-image: url(./makeup.jpg);">
        </div>
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Book an appointment with our experts</h1>
            <p>Get your perfect aid with us</p>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image" style="background-image: url(./designer1.jpg.jpg);">
        </div>
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Services available at major locations</h1>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h2 class="heading">OUR TOP RATED EXPERTS</h2>
  <div class="album py-5 bg-dark">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" src="ramkumar.jpg.jpg" alt="Image of Aju Jose">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

            <div class="card-body">
              <h3>Aju Jose</h3>
              <p class="card-text">If you need flyers that make people read without crumbling the piece of paper, then I'm your man. I have a bachelor's degree in Design and my main expertise include designing logos, flyers, banners. I can even provide graphic design for designing brochures that are best for travelogues.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary btn-text-white"><a href="profileview.php?id=36">
                      View More</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" src="ronyjames7.jpg" alt="Image of Rony">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

            <div class="card-body">
              <h3>Rony James</h3>
              <p class="card-text">I'm here to service all your beauty needs. If you're looking for special occasion makeup for that engagement session, wedding, birthday, headshot, or a date night, book me as your makeup artist. With my experience and professional knowledge, I'm positive I can benefit my clients.</p>


              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="profileview.php?id=33">
                      View More</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" src="Anamikaraj3.jpg" alt="Image of Anamika">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <div class="card-body">
              <h3>Anamika Raj</h3>
              <p class="card-text">I'm mainly a Technical Support Specialist. I typically answer inquiries from computer users. I also run diagnostic programs to determine the causes of and help resolve problems and answer questions to prevent downtime, while enhancing the use of hardware and operating systems.</p>


              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="profileview.php?id=35">
                      View More</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
<?php include("footer.php") ?>

</html>