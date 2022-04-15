<?php
include("dbcon.php");
session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <title>About US </title>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Montserrat|Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .navbar {
            background-color: #000000;
        }

        a {
            display: block;
            padding-top: 23px;
            padding-left: 22px;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-decoration: none;
            font-size: 40px;
            font-weight: 600;
            text-shadow: 2px 2px 4px #000000;
            width: fit-content;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .about-us {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .who-we-are {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 14px;
        }

        .who-we-are span {
            width: 60%;
            align-items: center;
            text-align: center;
        }

        .cards {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
            flex-wrap: wrap;


        }

        .card-img {
            border-radius: 0px;
        }

        .cards .card {
            width: 20rem;
            margin: 50px;
            display: inline-block;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
            background: white;
        }

        .card p {
            font-size: 14px;
        }

        .active {
            border-bottom: 1px solid black;
        }

        .card-img1 {
            width: 100%;
            height: 12rem;
            background-image: url("g1.jpg");
            background-size: cover;
            background-position: center center;
        }

        .card-img2 {
            width: 100%;
            height: 12rem;
            background-image: url("g2.jpg");
            background-size: cover;
            background-position: center center;
        }

        p {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: justify;
            font-size: medium;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            margin: 0;
        }

        .span {
            padding-left: 20px;

            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: url(bgabout.jpg);
            background-size: cover;
            background-position: center center;
            color: #fff;
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <div class="navbar" style="height:100px;">

        <div class="container-fluid">
            <!-- Links -->
            <?php if (!(isset($_SESSION['id']))) { ?>
                <a class="navbar-brand" href="home-explore.php">Scheppa</a>
            <?php } else { ?>
                <a class="navbar-brand" href="home-profile.php">Scheppa</a>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="about-us" data-aos="zoom-in">
            <div class="who-we-are">
                <h2>What is Scheppa?</h2>
                <span>Scheppa is a non-profit website for freelancing professionals to advertise their services. Scheppa was built on the foundation of helping freelancers stand on their feet in society.
                    From artistic professionals to tech geniuses, Scheppa provides a platform for freelancers to advertise their services and make it big.
                    We at Scheppa help in increasing exposure for both new and experienced freelancers to reach out to people.
                </span>
            </div>
            <div class="cards">
                <div class="card" data-aos="zoom-in">
                    <div class="card-img card-img1"></div>
                    <div class="card-body">
                        <h3 style="color:black; padding-left: 8px; text-align: center;">Spoorthi Udupa</h3>

                        <p style="color:black; ">A hardworking and passionate person, with an ever-perseverent attitude. In her free time, Spoorthi enjoys dancing, singing and making art especially with oil pastels.</p>
                    </div>
                </div>


                <div class="card" data-aos="zoom-in">
                    <div class="card-img card-img2"></div>
                    <card class="card-body">
                        <h3 style="color:black; padding-left: 10px; text-align: center;">Nupur Shenoy</h3>
                        <p style="color:black; ">Works well under pressure and is always open to new challenges. When she's not hunched over a laptop, she enjoys reading books and listening to music.</p>
                    </card>
                </div>


            </div>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 700
            });
        </script>
</body>
<footer style="color:black; margin-bottom:7px">
    © 2021 Scheppa. All rights reserved | Designed by Nupur Shenoy and Spoorthi Udupa
</footer>

</html>