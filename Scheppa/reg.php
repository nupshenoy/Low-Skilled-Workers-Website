<?php
include "dbcon.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$confpass = $_POST['confirm-password'];
$phno = $_POST['phno'];
$dob = $_POST['dob'];
$prof = $_POST['occ'];
$loc = $_POST['loc'];
$descp = $_POST['text1'];

$stmt = mysqli_prepare($conn, "INSERT into schepparegistration1(fname, lname, gender, email, password, confpass ,prof ,loc, dob, phno, descp ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
mysqli_stmt_bind_param($stmt, "sssssssssis", $fname, $lname, $gender, $email, $password, $confpass, $prof, $loc, $dob, $phno, $descp);

if (mysqli_stmt_execute($stmt)) {
  echo ("<script>location.href='regsuccess.php'</script>");
  include "fetchh.php";
} else {
  echo '<script> alert("Could not register you")</script>';
}
