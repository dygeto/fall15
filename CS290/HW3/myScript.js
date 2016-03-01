

//Plays rock paper scissors when an image is clicked
function rockPaperScissors(clickedImage) {
	
	var win = 0;
	var comWin = 0;
	var draw = 0;
	//loads images into variables
	var computerImage = document.getElementById("computerSelection");
	var selectedImage = document.getElementById("userSelection");
	
	var computerResult;
	
	//determines which image was selected by the user
	if (clickedImage == "rock") {
		selectedImage.src = "images/rock.gif";
	}
	else if (clickedImage == "paper") {
		selectedImage.src = "images/paper.png";
	}
	else if (clickedImage == "scissors") {
		selectedImage.src = "images/scissors.jpg";
	}
	
	//generates a random number between 0 and 3
	var computerChoice = Math.floor((Math.random() * 3) + 1);
	
	//determines the computers choice from the random number generated
	switch(computerChoice) {
		case 1:
			computerImage.src = "images/rock.gif";
			computerResult = "rock";
			break;
		case 2:
			computerImage.src = "images/paper.png";
			computerResult = "paper";
			break;
		case 3:
			computerImage.src = "images/scissors.jpg";
			computerResult = "scissors";
			break;
	}
			
	//All possible wins for the user, increments userWins and prints it out with a message
	if (clickedImage == "rock" && computerResult == "scissors") {
		win = 1;
		document.getElementById("result").innerHTML = "You WIN!";

	}
	else if (clickedImage == "paper" && computerResult == "rock") {
		win = 1;
		document.getElementById("result").innerHTML = "You WIN!";

	}
	else if (clickedImage == "scissors" && computerResult == "paper") {
		win = 1;
		document.getElementById("result").innerHTML = "You WIN!";
	
	}
	
	//All possible losses for the user, increments userLosses and prints out new losses
	if (clickedImage == "rock" && computerResult == "paper") {
		comWin = 1;
		document.getElementById("result").innerHTML = "You Lose!";
	
	}
	else if (clickedImage == "paper" && computerResult == "scissors") {
		comWin = 1;
		document.getElementById("result").innerHTML = "You Lose!";

	}
	else if (clickedImage == "scissors" && computerResult == "rock") {
		comWin = 1;
		document.getElementById("result").innerHTML = "You Lose!";

	}
	
	//All possible ties for the user, prints out "It's a tie!!"
	if (clickedImage == computerResult) {
		draw = 1;

	}
	
	var xhttp = new XMLHttpRequest();
	
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			var result = xhttp.responseText;
			var values = result.split(',');
			
			document.getElementById("wins").innerHTML = values[0];
			document.getElementById("comWins").innerHTML = values[1];
			document.getElementById("draws").innerHTML = values[2];
			
			document.getElementById("highWins").innerHTML = values[0];
			
		}
	};
	xhttp.open("GET", "rps.php?win="+win+"&comWin="+comWin+"&draw="+draw, true);
    xhttp.send(null);
}