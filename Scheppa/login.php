<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="cover.css" />
    <title>Login</title>
</head>
<style>
    .error {
        background: #F2DEDE;
        color: #A94442;
        padding-left: 20px;
        width: 60%;
        border-radius: 5px;
        margin: 4px auto;
    }
</style>

<body style="background-color:black">
    <div class="header">
        <div class="header-main">
            <h1><a href="home-explore.php" class="logo">Scheppa</a>
            </h1>
        </div>
    </div>
    <section class="Form my-3 mx-4">
        <div class="container" data-aos="fade-in">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="bglogin.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;padding-left: 110px;" class="font-weight-bold py-3">Welcome to Scheppa</h1>
                    <h4 style="padding-left: 150px;"> Log in to your account</h4>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <form action="log.php" method="POST" name="log-form">
                        <div class="form-row">
                            <div class="col-lg-9">
                                <input type="email" placeholder="Email-Address" name="email" class="form-control my-3 p-4" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <input type="password" placeholder="*********" name="password" class="form-control my-3 p-4" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <button type="submit" class="btn1 mt-2 mb-4" type="submit">Login</button>

                            </div>
                        </div>
                        <p style="padding-left: 130px;"> Don't have an account? <a href="registration%20(1).php">Register here</a></p>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 2000
        });
    </script>
</body>
<footer>
    © 2021 Scheppa. All rights reserved | Designed by Nupur Shenoy and Spoorthi Udupa
</footer>

</html>