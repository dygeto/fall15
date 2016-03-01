<?php
	session_start();
	include 'connect.php';
	include 'navigation.php';
	if ((isset($_POST['userName'])) && (isset($_POST['password'])) ){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		
		$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$dbc) {
			die('Could not connect: ');
		}
	
		$query = "SELECT * FROM users WHERE userName='$userName' and password='$password'";
		$result = mysqli_query($dbc, $query);
	
		if (mysqli_num_rows($result) == 1) {
	
			// The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
			  $row = mysqli_fetch_array($result);
			  $_SESSION['firstName'] = $row['firstName'];
			  $_SESSION['validUser'] = $row['userName'];
			  echo "You have successfully logged in!";
		}
		else {
          // The username/password are incorrect so set an error message
			echo "Sorry, you must enter a valid username and password to log in.";
		}
		mysqli_free_result($result);
		mysqli_close($dbc);
	}  

?>
<!DOCTYPE html>
<body>
<h1> Log in Page </h1>

<?php
	if (isset($_SESSION['validUser'])) {
		echo "You are logged in";
	}
	else {
		if (isset($userName)) {
			// user tried but can't log in
			echo "<h2> Could not log you in </h2>";
		} else {
			// user has not tried
			echo " <h2> You need to log in </h2> ";
		}
		// Log in form

		echo " <form method='post' action='login.php' > ";
		echo " User name <input type='text' name='userName'> <br /> ";
		echo "  Password <input type='password' name='password' /> <br />";
		echo '<input type="submit" value="Log In" name="submit" />';
		echo "</form>";
	}	
?>
</body>
</html>		
			
		

