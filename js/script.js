/* CONTACT FORM SCRIPTS

------------------------------------------------------------
Function to slide the sidebar form (open form)
------------------------------------------------------------
*/
function slideOut() {
var slidingDiv = document.getElementById("slider");
var stopPosition = 0;
if (parseInt(slidingDiv.style.right) < stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
setTimeout(slideOut, 1);
}
}

/*
------------------------------------------------------------
Function to slide the sidebar form (slide in form)
------------------------------------------------------------
*/
function slideIn() {
var slidingDiv = document.getElementById("slider");
var stopPosition = -500;
if (parseInt(slidingDiv.style.right) > stopPosition) {
slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
setTimeout(slideIn, 1);
}
}

/* IMAGE SLIDER SCRIPTS */

var slideshow = document.getElementById("slideshow");
var slides = slideshow.getElementsByTagName("img");

var counter = document.getElementById("counter");
var max = parseInt(document.getElementById("maximum").innerText, 10);
var numberClicks = 1;

var down = document.getElementById("down");
var up = document.getElementById("up");

document.getElementById("down").onclick = function(){
  if(numberClicks > 1) {
    numberClicks = numberClicks - 1;
    replaceCounter();
    editClasses();
   }
}

document.getElementById("up").onclick = function(){
  if (numberClicks < max) {
    numberClicks = numberClicks + 1;
    replaceCounter();
    editClasses();
  }
}

function editClasses() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("d-block");
    slides[i].classList.add("d-none");
    document.getElementById(numberClicks).className = "img-fluid d-block";
  }
}

function replaceCounter() {
  counter.innerText = numberClicks;
}


/* var form = document.getElementById("contactForm");
function handleForm(event) {
  event.preventDefault();
}
form.addEventListener('submit', handleForm); */
