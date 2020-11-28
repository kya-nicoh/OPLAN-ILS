<!DOCTYPE html>

<?php

// Create connection
//$con=mysqli_connect("localhost","root","","admin oplan"); 

// Check connection
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}



	session_start();
	
	


	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		header("Location: home.html")
	}
	if (isset($_POST['username']) && isset($_POST)['password'])){
		if ($_POST['username'] == $username && $_POST['password'] ==$ )
}






?>



<html>
<head>

</head>
<body>
		<form method="post" action="log.php">
			Username:
			<input type="text" name="username">
			Password:
			<input type="text" name="password">
			<input type="submit" name="Login">
		</form>

</body>
</html>