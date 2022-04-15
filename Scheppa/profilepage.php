<?php
include 'dbcon.php';
session_start();
$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM schepparegistration1 WHERE id='$id'");
$row = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" href= "stylinghomepage.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script type="text/javascript">

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
            padding-left: 10px;
            font-size: 20px;
            color: darkgrey;
            text-decoration: underline rgb(218, 143, 6);
        }

        p {
            font-size: 20px;
            color: white;
        }

        img {

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
            width: 20vw;
            height: 20vw;
            object-fit: fill;
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

        /*modal styling*/
        label {
            margin-bottom: 10px;
            display: inline-block;
            width: 150px;
            text-align: right;
            font-family: sans-serif;
            font-weight: 400;
        }


        input[type=text],
        [type="tel"],
        [type="email"],
        select {
            width: 60%;
            display: inline-block;
            border: darkgrey solid 1px;
            border-radius: 4px;
            height: 40px;
            background-color: whitesmoke;

            color: black;
            padding-inline-start: 10px;
        }

        .form-group {
            width: 60%;
            height: 100%;
        }

        input[type=text]:focus,
        input[type=password]:focus,
        [type="tel"]:focus,
        [type="email"]:focus,
        [type="date"]:focus,
        select:focus {
            background-color: transparent;
            outline: white;
        }

        input,
        select {
            margin-left: 10px;
            margin-bottom: 10px;
        }


        textarea {
            margin-left: 170px;
            margin-top: 0;
            width: 60%;
            border: darkgrey solid 1px !important;
            border-radius: 4px !important;
            background-color: whitesmoke !important;

        }

        .modal-title {
            color: chocolate;
            padding-left: 30px;
        }

        input[type=submit] {
            margin: 0;
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

        <div class="container-fluid ">
            <!-- Links -->
            <a class="navbar-brand" href="#" style="color: white; text-decoration: none; font-size: 40px; font-weight: 600; text-shadow: 2px 2px 4px #000000; padding: 8px 10px;">Scheppa</a>
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
                            <li><a class="dropdown-item" href="beauticians-profile.php">Beauticians</a></li>
                            <li><a class="dropdown-item" href="lowskill-profile.php">Low Skilled Workers</a></li>
                            <li><a class="dropdown-item" href="compspl-profile.php">Computer Specialists</a></li>
                            <li><a class="dropdown-item" href="artcomm-profile.php">Art Commissioners</a></li>
                            <li><a class="dropdown-item" href="designers-profile.php">Designers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: rgb(218, 143, 6)">MyProfile</a>
                    </li>
                    <li>
                        <div class="logout">
                            <a href="logout.php">LOG OUT</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3 mb-3">
        <br>
        <div class="row">
            <div class="col-4 bg-black d-flex justify-content-center ">
                <div class="card bg-black align-items-center">

                    <div class="card-body">
                        <img class="card-img-top" src="<?php echo 'image/' . $row['photo']; ?>" />;
                        <div class="row">
                            <div class="col">
                                <p><i class="fa fa-home" style="color:chocolate; font-size:25px"> </i> <?php echo $row['loc'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><i class="fa fa-history" style="color:chocolate; font-size:25px;"></i> <?php echo $row['years'] ?> years experience</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><i class="fa fa-phone" style="color:chocolate; font-size:25px;"> </i> +91 <?php echo $row['phno'] ?></p>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col">
                                <p><i class="fa fa-envelope" style="color:chocolate; font-size:25px;"></i> <a href="mailto: <?php echo $row['email'] ?>" target="_blank" style="color:white;"><?php echo $row['email'] ?></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#myModal">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    <br>

                    <br>
                </div>
            </div>

            <div class="col-8 bg-light" style="padding-top:10px; padding-right:10px;">
                <div class="row">
                    <div class="col-12">
                        <h3 class="card-title"><?php echo $row['fname'] . " " . $row['lname'] ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4><?php echo $row['prof'] ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>Description</h5>
                        <p style="color:black; font-size:18px; margin:30px;"><?php echo $row['descp'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>Services</h5>
                        <p style="color:black; font-size:18px; margin:30px;"><?php echo $row['services'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Enter Changes</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="profilepage.php" method="post" enctype="multipart/form-data">

                        <div>
                            <label for="fname"><b>First Name</b></label>
                            <input type="text" name="fname" value="<?php echo $row['fname'] ?>" required autocomplete=off>

                        </div>
                        <div>
                            <label for="lname"><b>Last Name</b></label>
                            <input type="text" name="lname" value="<?php echo $row['lname'] ?>" required autocomplete=off><br>
                        </div>
                        <div>
                            <label for="email"><b>Email</b></label>
                            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" required autocomplete=off><br>
                        </div>
                        <div>
                            <label for="contact"><b>Contact Number</b></label>
                            <input type="tel" name="phno" value="<?php echo $row['phno'] ?>" required autocomplete=off><br>
                        </div>
                        <div>
                            <label for="years"><b>Experience (in years)</b></label>
                            <input type="text" name="years" value="<?php echo $row['years'] ?>" required autocomplete=off><br>
                        </div>
                        <div>
                            <label for="profession"><b>Profession</b></label>

                            <select id="profession" name="prof" required>
                                <option value="<?php echo $row['prof'] ?>" selected disabled hidden><?php echo $row['prof'] ?></option>
                                <option value="Beautician">Beautician</option>
                                <option value="Low Skill Worker">Low Skill Worker</option>
                                <option value="Art Commissioner">Art Commissioner</option>
                                <option value="Computer Specialist">Computer Specialist</option>
                                <option value="Designer">Designer</option>
                            </select>
                        </div>
                        <div>
                            <label for="location"><b>Location</b></label>
                            <!---<input type="text" list="location" name="loc" autocomplete=off>-->

                            <select id="location" name="loc" required>
                                <option value="<?php echo $row['loc'] ?>" selected disabled hidden><?php echo $row['loc'] ?></option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Udupi">Udupi</option>
                                <option value="Hassan">Hassan</option>
                                <option value="Chikmagalur">Chikmagalur</option>
                                <option value="Nitte">Nitte</option>
                            </select><br>
                        </div>
                        <div>
                            <label for="photo"><b>Profile Picture</b></label>
                            <input type="file" name="photo" class="custom-file-upload" style="border:none;">
                            <br>
                        </div>
                        <br>
                        <!---<label for="descp"><b>Description<span style="color: red">*</span></b></label>-->
                        <div class="form-group">
                            <label for="descp"><b>Description</b></label>
                            <textarea class="form-control" name="descp" id="descp" cols="40" rows="5" required><?php echo $row['descp']  ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="services"><b>Services</b></label>
                            <textarea class="form-control" name="services" id="services" cols="40" rows="5"><?php echo $row['services']  ?></textarea>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" name="submit" id="submit" class="btn btn-warning" data-bs-dismiss="modal" value="Save">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>
<footer>
    © 2021 Scheppa. All rights reserved | Designed by Nupur Shenoy and Spoorthi Udupa
</footer>

</html>

<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $descp = $_POST['descp'];
    $services = $_POST['services'];
    $years = $_POST['years'];

    if (isset($_POST['loc'])) {
        $loc = $_POST['loc'];
    } else {
        $loc = $row['loc'];
    }

    if (isset($_POST['prof'])) {
        $prof = $_POST['prof'];
    } else {
        $prof = $row['prof'];
    }


    $photo = $_FILES["photo"]["name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];

    if (($type != "jpg") && ($type != "png") && ($type != "jfif")) {
        echo "File is of invalid type";
    }

    if ($size > 4194304) {
        echo "File is too big";
    }

    if (!file_exists("image/" . $_FILES['photo']['name'])) {
        $query = "UPDATE schepparegistration1 SET fname='$fname', lname='$lname', email='$email', phno='$phno', years='$years',prof='$prof',loc='$loc', descp='$descp',services='$services', photo='$photo' WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            move_uploaded_file($_FILES['photo']['tmp_name'], "image/" . $_FILES['photo']['name']);
            echo '<script type="text/javascript">
                    window.location = "profilepage.php";
                </script>';
        }
    } else {
        $query = "UPDATE schepparegistration1 SET fname='$fname', lname='$lname', email='$email', phno='$phno', years='$years',prof='$prof',loc='$loc', descp='$descp',services='$services' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        echo '<script type="text/javascript">
            window.location = "profilepage.php";
        </script>';
    }
}
?>