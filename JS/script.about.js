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