<?php
$email = $_POST['email'];
$newUsername = $_POST['new-username'];
$newPassword = $_POST['new-password'];
$confirmPassword = $_POST['confirm-password'];


echo ("email= ". $email . "<br/>");
echo ("new-username= ". $newUsername . "<br/>");
echo ("new-password= ". $newPassword . "<br/>");
echo ("confirm-password= ". $confirmPassword . "<br/>");

if ($newPassword != $confirmPassword)
echo "<script>alert('کلمه عبور و تکرار آن مشابه نیست');</script>";
exit();

if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false)
echo "<script>alert('ایمیل درست وارد نشده');</script>";
exit();
?>
