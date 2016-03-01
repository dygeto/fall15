<?php
	include 'connect.php';
	include 'navigation.php';
	session_start();
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
			<td>Losses</td>
			<td>Draws</td>
		<tr>
			<td id ="wins">0</td>
			<td id ="comWins">0</td>
			<td id="Draws">0</td>
		</tr>
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