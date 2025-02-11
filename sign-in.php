<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo ("username= ". $username . "<br/>");
echo ("password= ". $password . "<br/>");

if (isset($_POST['username']) && !empty ($_POST['username'])
&&
isset($_POST['password']) && !empty ($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}
else
exit("تمام فیلدها باید پر شوند!!")
?>
 