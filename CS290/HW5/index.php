<!doctype html>
<html lang="en-us">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Game Zone | TAoPM</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="true">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
	<script src="siteFunctions.js"></script>
	
  </head>
  
  <body onclick="losefocus()" class="template">
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
								
								include '../../navigation2.php';
								include '../../connect.php';
							?>
						
					</div>
				</div>
				
			</header>
		</div>
	<div id="content2" class="clear">
				
				<div class="row">
					<div class="col-md-12">
					<h3 class="inlineHeader"><b>>The Adventures of Philmore McCroaker</b></h3>
					</div>
				</div>
				
				<div class="row">

					<div class="template-wrap clear" id="WebGLKeyboardInput">
						<div class="col-md-12">
							<canvas onclick="getfocus()" class="emscripten clear" id="canvas" oncontextmenu="event.preventDefault()" height="108" width="192"></canvas>
							<div class="logo"></div>
						  <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /> (Full screen) </div>
						  <div class="title">TAoPM</div>
						  
						</div>
						
					  </div>
				 </div>
				 
				 <div class="row">
					<div class="col-md-12">
					<p class="footer">&laquo; created with <a href="http://unity3d.com/" title="Go to unity3d.com">Unity</a> &raquo;</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						
					<p>Your Rating:</p>
					<div class="star-rating">
						<label>
							<input onclick="userRating()" id="userRating1" type="radio" name="rating" value="1">
							<img id="userRating1img" alt="star" src="images/star-white.png">
						</label>
						<label>
							<input onclick="userRating()" id="userRating2" type="radio" name="rating" value="2">
							<img id="userRating2img" alt="star" src="images/star-white.png">
						</label>
						<label>
							<input onclick="userRating()" id="userRating3" type="radio" name="rating" value="3">
							<img id="userRating3img" alt="star" src="images/star-white.png">
						</label>
						<label>
							<input onclick="userRating()" id="userRating4" type="radio" name="rating" value="4">
							<img id="userRating4img" alt="star" src="images/star-white.png">
						</label>
						<label>
							<input onclick="userRating()" id="userRating5" type="radio" name="rating" value="5">
							<img id="userRating5img" alt="star" src="images/star-white.png">
						</label>
					</div>
						
						
					</div>
				 </div>
				 <div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						Average Rating:
						<div class="rating">
							<img alt="starOrange" src="../../images/star-orange.png">
							<img alt="starOrange" src="../../images/star-orange.png">
							<img alt="starOrange" src="../../images/star-orange.png">
							<img alt="starOrange" src="../../images/star-orange.png">
							<img alt="starOrange" src="../../images/star-white.png">
						</div>
					</div>
				 </div>
				 
				 <div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<hr>
						<br/><h2 class="inlineHeader">Comments</h2>
					
						<?php
							if (isset($_SESSION['validUser'])){
								echo '
									<form method="get" action="../../writeComment.php">
										<button name="gameName" type="submit" value="The Adventures of Philmore McCroaker">Post a comment!</button>
									</form>
								';
								
							}
							else
							{
								echo'<br/>Log in to post a comment!<br/><br/>';
							}
						?>
					
					
					 <?php			
						
						$dbhost = 'oniddb.cws.oregonstate.edu';
						$dbname = 'quenzerc-db';
						$dbuser = 'quenzerc-db';
						$dbpass = 'FHoQAXuNfUtIgMf0';

						$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
							
						$query = 'SELECT * FROM Comments WHERE game = "The Adventures of Philmore McCroaker" ORDER BY DATE(date) DESC, date ASC';
						$result = mysqli_query($dbc, $query);
						
						if (mysql_num_rows($result)==0) 
						{ 
							echo'<table class="comment">';
						
							while ($row = mysqli_fetch_array($result))
							{
								echo'<tr>';
										echo'<th>' . $row['userName'] . '<br/>' . $row['date'] . ' ' . $row['time'] . '</th>';
								echo'</tr>';
								echo'<tr>';
											echo'<td>' . $row['comment'] . '</td>';
								echo'</tr>';
							}			
										
							echo'</table>';
							echo'<br>';
						}
						else
						{
							echo '<h4><i>No comments yet. Be the first to post a comment!</i></h4><br/>';
						}
						
						mysqli_free_result($result);
						mysqli_close($dbc);
					 ?>
					 </div>
					<div class="col-md-1"></div>
				 </div>
				 
				 
	</div>
			<script type='text/javascript'>
		  // connect to canvas
		 var Module = {
    TOTAL_MEMORY: 268435456,
    filePackagePrefixURL: "Release/",
    memoryInitializerPrefixURL: "Release/",
    preRun: [],
    postRun: [],
    print: (function() {
      return function(text) {
        console.log (text);
      };
    })(),
    printErr: function(text) {
      console.error (text);
    },
    canvas: document.getElementById('canvas'),
    progress: null,
    setStatus: function(text) {
      if (this.progress == null) 
      {
        if (typeof UnityProgress != 'function')
          return;
        this.progress = new UnityProgress (canvas);
      }
      if (!Module.setStatus.last) Module.setStatus.last = { time: Date.now(), text: '' };
      if (text === Module.setStatus.text) return;
      this.progress.SetMessage (text);
      var m = text.match(/([^(]+)\((\d+(\.\d+)?)\/(\d+)\)/);
      if (m)
        this.progress.SetProgress (parseInt(m[2])/parseInt(m[4]));
      if (text === "") 
        this.progress.Clear()
    },
    totalDependencies: 0,
    monitorRunDependencies: function(left) {
      this.totalDependencies = Math.max(this.totalDependencies, left);
      Module.setStatus(left ? 'Preparing... (' + (this.totalDependencies-left) + '/' + this.totalDependencies + ')' : 'All downloads complete.');
    }
  };
  Module.setStatus('Downloading (0.0/1)');
</script>
<script src="Release/UnityConfig.js"></script>
<script src="Release/fileloader.js"></script>
<script>if (!(!Math.fround)) {
  var script = document.createElement('script');
  script.src = "Release/TAoPM.js";
  document.body.appendChild(script);
} else {
  var codeXHR = new XMLHttpRequest();
  codeXHR.open('GET', 'Release/TAoPM.js', true);
  codeXHR.onload = function() {
    var code = codeXHR.responseText;
    if (!Math.fround) { 
try {
  console.log('optimizing out Math.fround calls');
  var m = /var ([^=]+)=global\.Math\.fround;/.exec(code);
  var minified = m[1];
  if (!minified) throw 'fail';
  var startAsm = code.indexOf('// EMSCRIPTEN_START_FUNCS');
  var endAsm = code.indexOf('// EMSCRIPTEN_END_FUNCS');
  var asm = code.substring(startAsm, endAsm);
  do {
    var moar = false; // we need to re-do, as x(x( will not be fixed
    asm = asm.replace(new RegExp('[^a-zA-Z0-9\\$\\_]' + minified + '\\(', 'g'), function(s) { moar = true; return s[0] + '(' });
  } while (moar);
  code = code.substring(0, startAsm) + asm + code.substring(endAsm);
  code = code.replace("'use asm'", "'almost asm'");
} catch(e) { console.log('failed to optimize out Math.fround calls ' + e) }
 }

    var blob = new Blob([code], { type: 'text/javascript' });
    codeXHR = null;
    var src = URL.createObjectURL(blob);
    var script = document.createElement('script');
    script.src = URL.createObjectURL(blob);
    script.onload = function() {
      URL.revokeObjectURL(script.src);
    };
    document.body.appendChild(script);
  };
  codeXHR.send(null);
		}
		</script>
			
		
		
		

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
