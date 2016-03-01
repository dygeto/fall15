// slides selector
var slides = document.querySelectorAll("#slideshow img");

// the total number of slides
var slideTotal = slides.length;

// the width of the individual slides
var slideWidth = 400;

// keep count of what slide we are on
var currentSlide = 0;

// wrap all the slides in a div
var slideshowScreen = document.createElement("div");
slideshowScreen.setAttribute("id", "slideshow-screen")

for (var i = 0; i < slides.length; i++) {
    slideshowScreen.appendChild(slides[i]);
}

document.getElementById("slideshow").appendChild(slideshowScreen);

// make that div the width of all slides
slideshowScreen.style.width = (slideWidth * slides.length) + "px";

// move div left, one slideWidth at a time
setInterval(moveSlide, 2500)

// function to determine the next slide
function moveSlide() {

    // what slide is next
    if (currentSlide == slideTotal - 1) {
        currentSlide = 0
    } else {
        currentSlide++;
    }
    slideshowScreen.style.marginLeft = -(slideWidth * currentSlide) + "px";
}

//checks if user is at the initial slide, otherwise takes user to previous slide
function moveSlideBack() {

    // what slide is prev
    if (currentSlide == 0) {
        currentSlide = 0
    } else {
        currentSlide--;
    }
    slideshowScreen.style.marginLeft = -(slideWidth * currentSlide) + "px";
}

//Calls either moveSlide() or moveSlideBack() depending on if the user presses next or previous button
window.onload = function() {
    
    var btnNext = document.getElementById("btnNext");
    
    btnNext.addEventListener("click", function() {
              moveSlide();       
    	});
    
    var btnPrev = document.getElementById("btnPrev");
    
    btnPrev.addEventListener("click", function() {
              moveSlideBack();       
    	});
};