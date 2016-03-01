
function userRating()
{
	var star1 = document.getElementById("userRating1");
	var star2 = document.getElementById("userRating2");
	var star3 = document.getElementById("userRating3");
	var star4 = document.getElementById("userRating4");
	var star5 = document.getElementById("userRating5");
	var userChoice;
	var userStars;
	var gameName;
	
	if(document.getElementById('userRating5').checked) 
	{
		userChoice = 5;
		gameName = document.getElementById('userRating5').value;
		star5.src = 'images/star-orange.png';
		star4.src = 'images/star-orange.png';
		star3.src = 'images/star-orange.png';
		star2.src = 'images/star-orange.png';
		star1.src = 'images/star-orange.png';
	}
	else if(document.getElementById('userRating4').checked) 
	{
		userChoice = 4;
		gameName = document.getElementById('userRating4').value;
		star5.src = 'images/star-white.png';
		star4.src = 'images/star-orange.png';
		star3.src = 'images/star-orange.png';
		star2.src = 'images/star-orange.png';
		star1.src = 'images/star-orange.png';
	}
	else if(document.getElementById('userRating3').checked) 
	{
		userChoice = 3;
		gameName = document.getElementById('userRating3').value;
		star5.src = 'images/star-white.png';
		star4.src = 'images/star-white.png';
		star3.src = 'images/star-orange.png';
		star2.src = 'images/star-orange.png';
		star1.src = 'images/star-orange.png';
	}
	else if(document.getElementById('userRating2').checked) 
	{
		userChoice = 2;
		gameName = document.getElementById('userRating2').value;
		star5.src = 'images/star-white.png';
		star4.src = 'images/star-white.png';
		star3.src = 'images/star-white.png';
		star2.src = 'images/star-orange.png';
		star1.src = 'images/star-orange.png';
	}
	else if(document.getElementById('userRating1').checked) 
	{
		userChoice = 1;
		gameName = document.getElementById('userRating1').value;
		star5.src = 'images/star-white.png';
		star4.src = 'images/star-white.png';
		star3.src = 'images/star-white.png';
		star2.src = 'images/star-white.png';
		star1.src = 'images/star-orange.png';
	}
	

	var xhttp = new XMLHttpRequest();
	
    xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
	  var result = xhttp.responseText;
      document.getElementById("ratings").innerHTML = result;
    }
    };
    xhttp.open("GET", "stars.php?numberStars="+userChoice+"&gameName="+gameName, true);
    xhttp.send();
}

