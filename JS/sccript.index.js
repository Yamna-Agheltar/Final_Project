var slideIndex = 0;  
function changeSlide(direction) {
var slides = document.getElementsByClassName("slide");
slides[slideIndex].classList.remove("slide1");
slideIndex += direction;
if (slideIndex >= slides.length) {
   slideIndex = 0;
} else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
}
slides[slideIndex].classList.add("slide1");
}
    
var currentTextIndex = 0;
var texts = document.getElementsByClassName('txt');
function showText(index) {
for (var i = 0; i < texts.length; i++) {
    texts[i].classList.remove('first');
}
texts[index].classList.add('first');
document.getElementById('prevBtn').disabled = index === 0;
document.getElementById('nextBtn').disabled = index === texts.length - 1;
 }
function beforText() {
if (currentTextIndex > 0) {
    currentTextIndex--;
    showText(currentTextIndex);
    }
 }
 function nextText() {
    if (currentTextIndex < texts.length - 1) {
      currentTextIndex++;
       showText(currentTextIndex);
    }
 }
    showText(currentTextIndex);

window.onscroll = function() {
   var backToTopButton = document.getElementById('up');
   if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
       backToTopButton.style.display = "block";
   } else {
       backToTopButton.style.display = "none";
   }
};
document.getElementById('up').onclick = function(event) {
   event.preventDefault();
   window.scrollTo({top: 0, behavior: 'smooth'}); 
};

function toggleDarkMode() {
   var body = document.body;
   var isChecked = document.querySelector('.theme input').checked;
 
   if (isChecked) {
     body.classList.add('dark-mode');
   } else {
     body.classList.remove('dark-mode');
   }
 }
