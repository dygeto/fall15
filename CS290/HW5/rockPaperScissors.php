<?php
	session_start();
	include 'connect.php';
	include 'navigation.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Rock Paper Scissors</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script src="myScript.js"></script>
</head>

<body>

	<h1>Rock Paper Scissors</h1>
	<img id ="rock" src="images/rock.gif" onclick="rockPaperScissors(this.id)" alt="Rock" />
	<img id ="paper" src="images/paper.png" onclick="rockPaperScissors(this.id)" title="Paper" alt="Paper" />
	<img id ="scissors" src="images/scissors.jpg" onclick="rockPaperScissors(this.id)" title="Scissors" alt="Scissors" />
	<hr />
	<ul id="selectionHeader">
		<li>User Selection</li>
		<li>Computer Selection</li>
	</ul>
	<img id ="userSelection" src="images/questionMark.gif" height = "300" width = "300" alt="User Choice" title="User Choice" />
	<img id ="computerSelection" src="images/questionMark.gif" height = "300" width = "300" alt="Computer Choice" title="Computer Choice" />
	<table>
		<tr>
			<td>Results</td>
		</tr>
		<tr>
			<td id ="result"></td>
		</tr>
		<tr>
			<td>Wins</td>
			<td>Computer Wins</td>
			<td>Draws</td>
		<tr>
			<td id ="wins">0</td>
			<td id ="comWins">0</td>
			<td id="draws">0</td>
		</tr>
	</table>
	<table>
		<tr>
			<th>Player</th>
			<th>Wins</th>
		</tr>
			<td>You</td>
			<td id ="highWins">0</td>
		</tr>
	<?php
		$userName = trim($_SESSION['validUser']);
		$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$query = "SELECT wins, userName FROM scoreboard WHERE userName != '$userName' ORDER BY wins DESC";
	
		$result = mysqli_query($dbc, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
				echo '<td>' . $row['userName']. '</td>';
				echo '<td>' . $row['wins']. '</td>';
			echo '</tr>';
			}
		}
	?>
	</table>
	<article>
		<p><strong>Instruction:</strong> Click an image above to select your item! Then the computer will select one as well!</p>
		<h3>Rules:</h3>
		<ul>
			<li>Paper beats rock</li>
			<li>Rock beats scissors</li>
			<li>Scissors beats paper</li>
			<li>HAVE FUN!</li>
		</ul>
	</article>
</body>
</html>