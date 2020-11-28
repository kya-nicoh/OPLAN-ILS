<script type="text/javascript">
        function show_alert() {
            var msg = "Insert jau.";
            alert(msg);
        }
</script>


<?php
 $username = $_POST['username'];
 $password = $_POST['password'];


//database connection
$con = mysqli_connect("localhost", "root", "", "admin oplan");

$username = stripslashes($username);
$password = stripslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


$result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND password = '$password'")
                  or die ("Failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);

if (!empty($username) || (!empty($password))){
  if ((($row['username'])== $username) && ($row['password']) == $password) {

    echo "<script type='text/javascript'>alert('LOGIN SUCCESS!');
    window.location='LoginHtml.html';
      </script>";

 //link page here..
  }else {
echo "<script type='text/javascript'>alert('Wrong Username or Password');
       window.location='LoginHtml.html';
      </script>";
}
}
 ?>
