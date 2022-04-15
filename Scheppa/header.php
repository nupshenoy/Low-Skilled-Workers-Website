<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="service.css">
</head>

<body>
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
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <?php if (!(isset($_SESSION['id']))) { ?>
                        <li class="nav-item" style=" margin-top:10px;">
                            <a class="header-info" style="padding:5px; margin-top:10px; padding-top:10px;" href="registration%20(1).php"><button class="login" id="login">Register</button></a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profilepage.php">MyProfile</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</body>


</html>