<?php
	
	session_start();
	include 'connect.php';
	include 'rps.php';
	include 'navigation.php';
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rock Paper Scissors Tutorial</title>
</head>
<body>
 
<form action="rockPaperScissors.php" method="post">
	<input name="roundCount" type="hidden" value="<?php echo $roundCount; ?>" />
	<input name="winCount" type="hidden" value="<?php echo $winCount; ?>" />
	<input name="lossCount" type="hidden" value="<?php echo $lossCount; ?>" />
	<input name="drawCount" type="hidden" value="<?php echo $drawCount; ?>" />
	<label><input type="submit" name="playerPick" value="rock" id="pick1" /></label>
	<label><input type="submit" name="playerPick" value="paper" id="pick2" /></label>
	<label><input type="submit" name="playerPick" value="scissors" id="pick3" /></label>
</form>

<p>CURRENT GAME STATUS: <?php echo $winLossDraw; ?></p>

<p>You threw: <?php echo $playerPick; ?></p>

<p>Computer threw: <?php echo $computerPick; ?></p>

<p>Total Throws: <?php echo $roundCount; ?></p>

<p>Wins: <?php echo $winCount; ?></p>

<p>Losses: <?php echo $lossCount; ?></p>

<p>Draws: <?php echo $drawCount; ?></p>


</body>
</html>