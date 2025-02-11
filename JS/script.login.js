document.getElementById("to-signup").addEventListener("click", function() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
});

document.getElementById("to-login").addEventListener("click", function() {
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
});

document.getElementById("close-login").addEventListener("click", function() {
    window.location.href = "index.html"; // به صفحه اصلی هدایت می‌کند
});

document.getElementById("close-signup").addEventListener("click", function() {
    window.location.href = "index.html"; // به صفحه اصلی هدایت می‌کند
});