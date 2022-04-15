<?php
include("dbcon.php");
session_start();

$id = $_GET['id'];
$sql = "SELECT fname, lname, prof, years, phno, services, email, photo, descp, loc, id from schepparegistration1 where id=$id ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $phno = $row['phno'];
        $loc = $row['loc'];
        $prof = $row['prof'];
        $years = $row['years'];
        $services = $row['services'];
        $descp = $row['descp'];
        $photo = $row['photo'];

?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>Profile</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" href= "stylinghomepage.css">-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
            </script>
            <style>
                html,
                body {
                    margin: 0;
                    padding: 0;
                }


                .nav-item a {
                    color: black;
                    text-decoration: none;
                    font-size: 16px;
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

                /*navbar*/
                .bg-custom-1 {
                    background-color: black;
                }

                .navbar-nav .nav-item .nav-link:hover {
                    color: rgb(218, 143, 6) !important;
                }

                /*profile card styling*/
                h3,
                h4,
                h5,
                p {
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                    margin: 10px;
                }

                h3 {
                    padding: 10px;
                    color: black;
                    font-weight: bold;
                    font-size: 70px;
                }

                h4 {
                    padding: 10px;
                    color: chocolate;
                    font-size: 40px;
                }

                h5 {
                    font-size: 20px;
                    color: darkgrey;
                    text-decoration: underline rgb(218, 143, 6);
                }

                p {
                    font-size: 20px;
                    color: white;
                }

                img {
                    padding: 20px;
                    margin: 10px;

                }

                .btn {
                    margin-top: 40px;
                }

                .card {
                    width: 400px;
                    height: 700px;
                }

                .card-img-top {
                    width: 300px;
                    height: 300px;
                    object-fit: cover;
                    border-radius: 100%;
                }

                .card-text {
                    width: 370px;
                    height: 300px;
                }

                .btn {
                    height: fit-content;
                    color: white;
                    font-size: 20px;
                    border: 1px solid white;
                    text-decoration: none;
                    background-color: black;
                }

                .logout a {
                    width: 100px;
                    height: 100%;
                    color: white;
                    font-size: 20px;
                    border: 1px solid white;
                    text-decoration: none;
                    padding: 5px;
                    padding-left: 8px;
                    float: right;
                    border-radius: 2px;
                }


                .logout a:hover {
                    color: red;
                }

                .container {
                    box-shadow: 0 .5rem 1rem rgba(black, .15);

                }

                .login {
                    height: 40px;
                    border: white;
                    border-width: 2px;
                    border-radius: 4px;
                    padding: 8px 18px;
                    font-size: 18px;
                    z-index: 0;
                    font-weight: normal;
                    cursor: pointer;
                    background-color: rgb(117, 117, 117);
                    color: white;
                    letter-spacing: 0.02em;
                    text-align: center;
                }

                .login:hover {
                    color: white;
                    background-color: rgb(218, 143, 6);
                }

                .navbar-nav .nav-item .nav-link,
                .logout {
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                    margin-right: 40px;
                    text-shadow: 2px 2px 4px #000000;
                    margin-top: 20px;
                }
            </style>
        </head>

        <body style="background-color:rgb(218, 143, 6);">
            <nav class="navbar navbar-expand-sm bg-custom-1" style="height:100px;">

                <div class="container-fluid">
                    <!-- Links -->
                    <a class="navbar-brand" href="home-explore.php" style="color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; text-decoration: none; font-size: 40px; font-weight: 600; text-shadow: 2px 2px 4px #000000; padding: 8px 10px;">Scheppa</a>
                    <div class="navbar-collapse collapse" id="navbarCustom">
                        <ul class="navbar-nav">
                            <?php if (!(isset($_SESSION['id']))) { ?>
                                <li class="nav-item" style="margin-top:0px;">
                                    <a class="nav-link" href="home-explore.php">Home</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item" style="margin-top:0px;">
                                    <a class="nav-link" href="home-profile.php">Home</a>
                                </li>
                            <?php } ?>

                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">About Us</a>
                            </li>
                            <?php if (!(isset($_SESSION['id']))) { ?>
                                <li class="nav-item" style="margin-top: 17px;">
                                    <a class="header-info" href="registration%20(1).php"><button class="login" id="login">Register</button></a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="profilepage.php" style="color:rgb(218, 143, 6)">MyProfile</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container mt-3 mb-3 h-25">
                <br>
                <div class="row">
                    <div class="col-4 bg-black d-flex justify-content-center ">
                        <div class="card bg-black align-items-center">
                            <img class="card-img-top" src="<?php echo 'image/' . $photo; ?>" alt="Card image">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col">
                                        <p><i class="fa fa-home" style="color:chocolate; font-size:25px"> </i> <?php echo $loc ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><i class="fa fa-history" style="color:chocolate; font-size:25px;"></i> <?php echo $years ?> years experience</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p><i class="fa fa-phone" style="color:chocolate; font-size:25px;"> </i> +91 <?php echo $phno ?></p>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col">
                                        <p><i class="fa fa-envelope" style="color:chocolate; font-size:25px;"></i> <a href="mailto: <?php echo $email ?>" target="_blank" style="color:white;"><?php echo $email ?></a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-8 bg-light" style="padding-top:10px; padding-right:10px;">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="card-title"><?php echo $fname . " " . $lname ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">

                                <h4><?php echo $prof ?></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5>Description</h5>
                                <p style="color:black; font-size:18px; margin:30px;"><?php echo $descp ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5>Services</h5>
                                <p style="color:black; font-size:18px; margin:30px;"><?php echo $services ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
    }
} else
    echo ("no result");

    ?>

        </body>
        <footer>
            © 2021 Scheppa. All rights reserved | Designed by Nupur Shenoy and Spoorthi Udupa
        </footer>

        </html>