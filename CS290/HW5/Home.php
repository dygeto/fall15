<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="true">
  
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="loginLogout.js"></script>
  
</head>

<body>
<div id="wrapper">
<div id="container">

	<div id="header">
		<header>
		
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-6">
					<a href="http://web.engr.oregonstate.edu/~quenzerc/cs290/GameSite/Home.php"><h1 class="mainTitle" >Game Zone</h1></a>
					</div>
					<div class="col-md-4">
							
							<?php
								session_start();
								
								if (!isset($_SESSION['validUser']))
								{
									$reload = true;
								}
								
								if (isset($_SESSION['validUser'])){
									$firstName = $_SESSION['firstName'];
									echo " <div class='nav'>";
									echo"<h3> Welcome back ".$firstName."</h3>"; 
								}
								else
								{
									echo " <h3 id='welcome' class='inlineHeader'>Welcome Visitor</h3>";
								}
								
								include 'connect.php';
								include 'navigation.php';
								include 'login.php';
								
								if (isset($_SESSION['validUser']) && ($reload == true))
								{
									echo"<script>window.location.reload()</script>";
									$reload = false;
								}
							?>
							
						
					</div>
				</div>
				
		</header>
	</div>
	
	<div id="content">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
				
					<table>
						<tr>
							<th>
								<a href="http://web.engr.oregonstate.edu/~quenzerc/cs290/GameSite/games/TAoPM/index.php">The Adventures of Philmore McCroaker<br/><img alt="Pong" src="images/thumbs/TAoPMThumb.PNG"></a>
								
							</th>
							<td>
								Get Philmore to the flag without being squashed by a barrel!
							</td>
						</tr>
						<tr>
							<th>
								<a href="http://web.engr.oregonstate.edu/~quenzerc/cs290/GameSite/games/pong/index.php">Pong<br/><img alt="Pong" src="images/thumbs/pongThumb.PNG"></a>
							</th>
							<td>
								Beat the enemy paddle to a score of 7 to win!
							</td>
						</tr>
					</table>
					
		</div>
		<div class="col-md-2"></div>
	</div>
	</div>
	
	<div id="footer">
		<footer >
			<div class="row">
				
				<div class="col-md-12">
						<p class="center">Games and Website by Chris Quenzer and Dylan Tomlinson &copy; <?php echo date("Y");?></p>
				</div>
				
			</div>
		</footer>
	</div>
	
</div>
</div>

</body>
</html>