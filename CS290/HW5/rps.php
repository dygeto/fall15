<?php
	session_start();
	include 'connect.php';
	
	$win = 0;
	$comWin = 0;
	$draw = 0;
	
	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//get variables
	$win = intval($_GET['win']);
	$comWin = intval($_GET['comWin']);
	$draw = intval($_GET['draw']);
	
	$userName = trim($_SESSION['validUser']);
	
	if ($win == 1) {
		$query = "UPDATE scoreboard SET wins = wins + 1 WHERE userName = '$userName'";
		mysqli_query($dbc, $query);
	} 
	else if ($comWin == 1) {
		$query = "UPDATE scoreboard SET losses = losses + 1 WHERE userName = '$userName'";
		mysqli_query($dbc, $query);
	}
	else if ($draw == 1) {
		$query = "UPDATE scoreboard SET draws = draws + 1 WHERE userName = '$userName'";
		mysqli_query($dbc, $query);
	}
	
	$query = "SELECT wins, losses, draws FROM scoreboard WHERE userName = '$userName'";
	
	$result = mysqli_query($dbc, $query);
	while ($row = mysqli_fetch_array($result)) {
			echo $row['wins'];
			echo ", ".$row['losses'];
			echo ", ".$row['draws'];
	}
	
	
?>