<?php
include "dbcon.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Art Commissioners</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<!--- CSS for page --->


<body>
    <?php include("header.php") ?>

    <div class="main">
        <div class="sidenav">
            <a href="beauticians.php">Beauticians</a>
            <a href="lowskill.php">Low Skilled Workers</a>
            <a href="compspl.php">Computer Specialists</a>
            <a href="artcomm.php" style="color: rgb(218, 143, 6);">Art Commissioners</a>
            <a href="designers.php">Designers</a>
        </div>
        <section style="background-color:whitesmoke; background-size: cover;">
            <form name="search_form" method="post" action="artcomm.php">
                <?php include("location.php") ?>
                <!--cards -->

                <?php
                $query = "select * from schepparegistration1 where prof='Art Commissioner'";
                if (isset($_REQUEST['search'])) {
                    if (isset($_POST['loc'])) {
                        $searchterm = $_POST['loc'];
                        $query .= "and loc= '{$searchterm}'";
                    }
                }
                $r = mysqli_query($conn, $query);
                if ($r->num_rows > 0) {

                    while ($row = mysqli_fetch_assoc($r)) {
                        $id = $row['id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $descp = $row['descp'];
                        $loc = $row['loc'];
                        $photo = $row['photo'];
                        $phno = $row['phno'];
                        $email = $row['email'];
                        $services = $row['services'];
                        $years = $row['years'];
                        $prof = $row['prof'];

                ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo 'image/' . $photo; ?>">


                            <div class="card-body">
                                <div class="title">
                                    <h1> <?php echo $fname . " " . $lname; ?>
                                    </h1>
                                </div>
                                <div class="des">
                                    <p><?php echo $descp; ?> </p>
                                    <button><a href="profileview.php?id=<?php echo $id ?>">View More</a></button>
                                </div>
                            </div>
                        </div>


                        <!--cards -->
                <?php
                    }
                } else {
                    echo " <script>alert('No data found');</script>";
                    echo ("<script>location.href='artcomm.php'</script>");
                }
                ?>
    </div>
</body>
<?php include("footer.php") ?>

</html>