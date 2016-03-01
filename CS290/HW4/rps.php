<?php
	
	include 'connect.php';
	
	$roundCount = 0;
	$winCount = 0;
	$lossCount = 0;
	$drawCount = 0;
	$winLossDraw = "NA";
	$playerPick = "NA";
	$computerPick = "NA";

//get variables
	$roundCount = $_POST['roundCount'];
	$winCount = $_POST['winCount'];
	$lossCount = $_POST['lossCount'];
	$drawCount = $_POST['drawCount'];
	$playerPick = $_POST['playerPick'];

//randomize computer throw
	$randomComp = mt_rand(1,3);
	if ($randomComp == 1) {
		$computerPick = 'rock';
	}
	if ($randomComp == 2) {
		$computerPick = 'paper';
	}
	if ($randomComp == 3) {
		$computerPick = 'scissors';
	}

//compare throws
	if ($computerPick == $playerPick) {
		$winLossDraw = 'draw';
		$drawCount++;
	}

	if ($computerPick == 'rock' && $playerPick == 'paper') {
		$winLossDraw = 'win';
		$winCount++;
	}

	if ($computerPick == 'paper' && $playerPick == 'scissors') {
		$winLossDraw = 'win';
		$winCount++;
	}

	if ($computerPick == 'scissors' && $playerPick == 'rock') {
		$winLossDraw = 'win';
		$winCount++;
	}

	if ($computerPick == 'scissors' && $playerPick == 'paper') {
		$winLossDraw = 'loss';
		$lossCount++;
	}

	if ($computerPick == 'paper' && $playerPick == 'rock') {
		$winLossDraw = 'loss';
		$lossCount++;
	}

	if ($computerPick == 'rock' && $playerPick == 'scissors') {
		$winLossDraw = 'loss';
		$lossCount++;
	}
	
	$roundCount++;
	if (isset($_SESSION['validUser'])) {
		$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$userName = trim($_SESSION['validUser']);
		$query = "SELECT * FROM scoreboard WHERE userName = '$userName'";
		$data = mysqli_query($dbc, $query);
		$numRows = mysqli_num_rows($data);
		
		if ($numRows == 0) {
			$query = "INSERT INTO scoreboard (userName, wins, losses, draws, rounds) VALUES ('$userName', '$winCount', '$lossCount', '$drawCount', '$roundCount')";
			mysqli_query($dbc, $query);
		} else {
			$query = "UPDATE scoreboard SET wins = '$winCount', losses = '$lossCount', draws = '$drawCount', rounds = '$roundCount' WHERE userName = '$userName'";
			mysqli_query($dbc, $query);
		}
	}
	
?>