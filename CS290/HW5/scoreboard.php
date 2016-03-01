<?php 
	session_start();
	include 'connect.php';
	include 'navigation.php';
	
	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$query = "SELECT wins, userName, losses FROM scoreboard ORDER BY wins DESC";
	
		$result = mysqli_query($dbc, $query);
		echo '<h3>Score Board</h3>';
		if (mysqli_num_rows($result) > 0) {
		  echo '<table>';
			echo '<tr>';
				echo '<th>Player</th>';
				echo '<th>Wins</th>';
				echo '<th>Computer Wins</th>';
			echo '</tr>';
			while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
				echo '<td>' . $row['userName']. '</td>';
				echo '<td>' . $row['wins']. '</td>';
				echo '<td>' . $row['losses']. '</td>';
			echo '</tr>';
			}
		  echo '</table>';
		}
		else {
		  echo "0 results!";
		}

?>
<!DOCTYPE html>
<html>
<body>


</body>
</html>