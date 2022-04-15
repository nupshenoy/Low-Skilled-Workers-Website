<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale=1.0>
  <link rel="stylesheet" href="reg3.css">
  <!---<script src="validate.js"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function validation() {
      var confpass = document.forms["scheppa_form"]["confirm-password"].value;
      var password = document.forms["scheppa_form"]["password"].value;
      const phno2 = document.forms["scheppa_form"]["phno"].value;
      if (password !== confpass) {
        alert("Password does not match.");
        return false;
      }

      if (isNan(phno2)) {
        alert("Password does not match.");
        return false;
      }


      if (phno2.length != 10) {
        alert("Password does not match.");
        return false;
      }
    }
  </script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html,
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    h1 {
      text-shadow: 2px 2px 4px black;
    }

    footer {
      background-image: linear-gradient(transparent, black);
      padding: 20px;
      color: white;
      font-size: small;
      text-align: center;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      bottom: 0;
      width: 100%;
    }

    footer a {
      color: white;
    }

    footer a:hover {
      color: #40b6ff;
    }

    a:hover {
      color: rgb(218, 143, 6);
    }

    .bg-custom-1 {
      background-image: linear-gradient(black, transparent);
    }

    * {
      box-sizing: border-box
    }

    /* Add padding to containers */
    .container {
      padding: 16px;
    }

    input,
    textarea {
      padding: 5px 10px;
    }


    /* Full-width input fields */
    textarea,
    input[type=text],
    [type="text"],
    [type="tel"],
    [type="email"],
    [type="password"],
    [type="date"],
    [type=file],
    [list] {
      width: 50%;
      padding: 20px;
      margin: 5px 0 22px 0;
      margin-left: 30px;
      display: inline-block;
      border-bottom: white solid 2px;
      background-color: transparent;
      font-family: Arial, Helvetica, sans-serif;
      color: rgb(255, 255, 255);
    }


    textarea:focus,
    input[type=text]:focus,
    input[type=password]:focus,
    [type="tel"]:focus,
    [type="email"]:focus,
    [type="date"]:focus,
    [list]:focus,
    [type=file]:focus {
      background-color: transparent;
      outline: white;
    }

    datalist {
      width: 100%;
    }

    /* Overwrite default styles of hr */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .submit {
      background-color: rgb(218, 143, 6);
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 30%;
      opacity: 0.9;
      margin-left: 310px;
    }

    .submit:hover {
      opacity: 1;
    }

    /* Add a blue text color to links */
    a {
      color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
      background-color: transparent;
      text-align: center;
    }

    label {
      color: rgb(250, 188, 108);
      font-size: 20px;
      font-weight: 200;
      font-family: Arial, Helvetica, sans-serif;
      text-shadow: 2px 2px 4px #000000;
      margin-left: 20px;
      display: inline-block;
      width: 200px;
    }

    p {
      color: white;
      font-size: 17px;
      font-weight: 200;
      font-family: Arial, Helvetica, sans-serif;
      text-shadow: 2px 2px 4px #000000;
    }

    .background {
      filter: blur(4px);
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .foreground {
      backdrop-filter: blur(15px);
    }

    .navbar-nav .nav-item .nav-link:hover {
      color: rgb(218, 143, 6) !important;
    }

    @media (min-width: 1000px) {
      .container {
        width: 900px;
      }
    }

    textarea {
      margin-left: 255px;
      color: #f1f1f1;
    }

    input[type=radio] {
      border: 0px;
      width: 10%;
      height: 20px;
    }

    .custom-file-upload {
      border: 1px solid transparent;
      display: inline-block;
      padding: 6px 12px;
      cursor: pointer;
    }
  </style>

</head>

<body style="background-image: url(regg.jpg); background-size: cover;">
  <nav class="navbar navbar-expand-sm bg-custom-1" style="height:100px;">
    <div class="container-fluid">
      <!-- Links -->
      <a class="navbar-brand" href="#" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: white; text-decoration: none; font-size: 40px; font-weight: 600; text-shadow: 2px 2px 4px #000000; padding: 8px 10px;">Scheppa</a>
      <div class="navbar-collapse collapse" id="navbarCustom">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home-explore.php" style="color: white;
              text-decoration: none;
              font-size: 18px;
              margin-right: 40px;
              text-shadow: 2px 2px 4px #000000; ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.html" style="color: white;
              text-decoration: none;
              font-size: 18px;
              margin-right: 40px;
              text-shadow: 2px 2px 4px #000000;">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white;
                text-decoration: none;
                font-size: 18px;
                margin-right: 40px;
                text-shadow: 2px 2px 4px #000000;">Services</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="beauticians.php">Beauticians</a></li>
              <li><a class="dropdown-item" href="lowskill.php">Low Skilled Workers</a></li>
              <li><a class="dropdown-item" href="compspl.php">Computer Specialists</a></li>
              <li><a class="dropdown-item" href="artcomm.php">Art Commissioners</a></li>
              <li><a class="dropdown-item" href="designers.php">Designers</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!---Registration Form-->
  <div class="container">
    <div class="wrapper">
      <div class="background"></div>
      <div class="foreground">
        <div id="reg-form">
          <form action="reg.php" method="post" onsubmit="return validation()" name="scheppa_form">
            <div class="container-md">
              <h1 style="padding-top: 15px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Register As A Freelancer</h1>
              <hr>

              <label for="fname"><b>First Name<span style="color: red">*</span></b></label>
              <input type="text" name="fname" required autocomplete=off>
              <br>

              <label for="lname"><b>Last Name<span style="color: red">*</span></b></label>
              <input type="text" name="lname" required autocomplete=off><br>
              <br>
              <label for="Gender"><b>Gender<span style="color: red">*</span></b></label>
              <input type="radio" name="gender" value="ch1" required><label for="gender-male"><span style="color: white;"> Male</span></label>
              <input type="radio" name="gender" value="ch2"><label for="gender-female"><span style="color: white;"> Female</span></label><br>

              <br><label for="email"><b>Email<span style="color: red">*</span></b></label>
              <input type="email" name="email" id="email" required autocomplete=off><br>

              <label for="psw"><b>Password<span style="color: red">*</span></b></label>
              <input type="password" name="password" id="psw" required><br>

              <label for="psw-repeat"><b>Confirm Password<span style="color: red">*</span></b></label>
              <input type="password" name="confirm-password" id="psw-repeat" required><br>

              <label for="contact"><b>Contact Number<span style="color: red">*</span></b></label>
              <input type="tel" name="phno" required autocomplete=off><br>

              <label for="dob"><b>Date of Birth<span style="color: red">*</span></b></label>
              <input type="date" name="dob" required><br>

              <label for="profession"><b>Profession<span style="color: red">*</span></b></label>
              <input list="profession" name="occ" id="prof" placeholder="Choose an option" required autocomplete=off>
              <datalist id="profession">
                <option value=0 selected disabled></option>
                <option value="Beautician"></option>
                <option value="Low Skill Worker"></option>
                <option value="Art Commissioner"></option>
                <option value="Computer Specialist"></option>
                <option value="Designer"></option>
              </datalist><br>

              <label for="location"><b>Location<span style="color: red">*</span></b></label>
              <input list="location" name="loc" placeholder="Choose an option" autocomplete=off>
              <datalist id="location">
                <option value=0 selected disabled></option>
                <option value="Bangalore"></option>
                <option value="Udupi"></option>
                <option value="Hassan"></option>
                <option value="Chikmagalur"></option>
                <option value="Nitte"></option>
              </datalist><br>



              <!---<label for="descp"><b>Description<span style="color: red">*</span></b></label>-->
              <textarea name="text1" cols="40" rows="5" placeholder="Give a brief description about yourself" required></textarea>


              <p>By creating an account you agree to our <a href="#"><span style="text-shadow:none;">Terms & Privacy</span></a>.</p>
              <input type="submit" class="submit" name="register" value="Register">
            </div>

            <div class="container signin">
              <p style="font-style: italic;">Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>

        </div>
      </div>

    </div>
  </div>
</body>
<footer>
  © 2021 Scheppa. All rights reserved | Designed by Nupur Shenoy and Spoorthi Udupa
</footer>

</html>