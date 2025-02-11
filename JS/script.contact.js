function submitForm() {
    var title = document.getElementById('title').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var tel = document.getElementById('tel').value;
    var message = document.getElementById('message').value;

    if (!title || !name || !email || !tel || !message) {
        alert("⚠️ لطفاً تمامی فیلدها را پر کنید!");    } else {
        alert("کاربر گرامی " +name+" عزیز با شماره تلفن" +tel+ " و ایمیل " +email+ " متشکریم از ارسال پیام شما. ");
    }
}

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