<?php 
	if (isset($_SESSION['firstName'])){
		$firstName = $_SESSION['firstName'];
		echo " <h3> Welcome back ".$firstName."</h3>"; 
		echo "<p> <a href='logout.php'>Log out </a><br />";
		echo "<p> <a href='rockPaperScissors.php'>Rock Paper Scissors </a><br />";
		echo "<p> <a href='scoreboard.php'>Scoreboard </a><br />";
	}
	else {
		echo " <p> <a href='login.php'>Log In </a><br />";
		echo "<p> <a href='signup.php'>Sign Up </a><br />";
		echo "<p> <a href='rockPaperScissors.php'>Rock Paper Scissors </a><br />";
		echo "<p> <a href='scoreboard.php'>Scoreboard </a><br />";
	}
?>