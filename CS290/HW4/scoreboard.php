<?php 
	include 'connect.php';
	include 'navigation.php';
	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = "SELECT * FROM scoreboard ORDER BY wins DESC";
	$results = mysqli_query($dbc,$query);
	
	if (mysqli_num_rows($results) > 0) {
		while ($row = mysqli_fetch_assoc($results)) {
				echo "User Name: " . $row["userName"]. " | Wins: " . $row["wins"]. " | Losses: " . $row["losses"]. " | Draws: " . $row["draws"]. " | Total Rounds: " . $row["rounds"]. "<br>";
		}
	}
	else {
		echo "0 results";
	}
	
?>
<!DOCTYPE html>
<html>
<body>


</body>
</html>