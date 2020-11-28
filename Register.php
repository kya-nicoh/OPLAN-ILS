<?php

//database connection
$con = mysqli_connect("localhost", "root", "", "ils_db");
global $fname, $lname, $email, $uname, $pword;

$fname = stripslashes($fname);
$lname = stripslashes($lname);
$email = stripslashes($email);
$uname = stripslashes($uname);
$pword = stripslashes($pword);

$fname = mysqli_real_escape_string($con, $fname);
$lname = mysqli_real_escape_string($con, $lname);
$email = mysqli_real_escape_string($con, $email);
$uname = mysqli_real_escape_string($con, $uname);
$pword = mysqli_real_escape_string($con, $pword);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];


if(isset($_POST['Create'])){

$sql1 = "INSERT INTO user_details (first_name, last_name, email)
VALUES ('$fname', '$lname', '$email')";
$sql2 = "INSERT INTO user_acct (username, password)
VALUES ('$uname', '$pword')";

if(mysqli_query($con, $sql1) && (mysqli_query($con, $sql2))){
echo "<script type='text/javascript'>alert('Registration Successful!');
    window.location='index.html';
      </script>";

} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

}
mysqli_close($con);
 ?>
