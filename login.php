<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود / ثبت نام</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="CSS/style.login.css">
</head>
<body dir="rtl">

    <button id="close-btn" class="close-btn"><i class="fas fa-times"></i></button>

    <div class="overlay">
        <div class="form-container">
            <div id="login-form">
                <h2>ورود به حساب</h2>
                <form name="sign-in" action="sign-in.php" method="POST">
                    <label for="username" >نام کاربری</label>
                    <input type="text" name="username" id="username" placeholder="نام کاربری خود را وارد کنید" required>
                    <label for="password">کلمه عبور</label>
                    <input type="password" name="password" id="password" placeholder="کلمه عبور خود را وارد کنید" required>
                    <button type="submit" class="submit-btn">ورود</button>
                </form>
                <button id="to-signup" class="switch-btn">ثبت نام</button>
            </div>

            <div id="signup-form" style="display: none;">
                <h2>ثبت نام</h2>
                <form name="sign-up" action="sign-up.php" method="POST">
                    <label for="email">ایمیل</label>
                    <input type="email"  name="email"  id="email" placeholder="ایمیل خود را وارد کنید" required>
                    <label for="new-username">نام کاربری</label>
                    <input type="text" name="new-username" id="new-username" placeholder="نام کاربری جدید وارد کنید" required>
                    <label for="new-password">کلمه عبور</label>
                    <input type="password" name="new-password" id="new-password" placeholder="کلمه عبور جدید وارد کنید" required>
                    <label for="confirm-password">تأیید کلمه عبور</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="کلمه عبور را تأیید کنید" required>
                    <button type="submit" class="submit-btn">ثبت نام</button>
                </form>
                <button id="to-login" class="switch-btn">ورود</button>
            </div>
        </div>
    </div>
<script src="JS/script.login.js"></script>
</body>
</html>