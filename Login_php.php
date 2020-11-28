<?php


//database connection
$con = mysqli_connect("localhost", "root", "", "ils_db");
global $username, $password;

$username = stripslashes($username);
$password = stripslashes($password);



$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);



$username = $_POST['username']; 
$password = $_POST['password'];


$result = mysqli_query($con, "SELECT * FROM user_acct WHERE username = '$username' AND password = '$password'")
        or die ("Failed to query database".mysqli_error($con));
$row = mysqli_fetch_array($result);

if (!empty($username) || (!empty($password))){
  if ((($row['username'])== $username) && ($row['password']) == $password) {

  echo "<script type='text/javascript'>alert('LOGIN SUCCESS!');
    window.location='home.html';
      </script>";

 //link page here..
  }else {
echo "<script type='text/javascript'>alert('Wrong Username or Password, Please');
       window.location='index.html';
      </script>";
  }
}

mysqli_close($con);
 ?>
