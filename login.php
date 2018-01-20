<?php

require 'database.php';

$login = $_POST['login'];
$password = $_POST['password'];

$result = $mysqli->query("SELECT * FROM user_data WHERE login = $login and password = $password" );
$row = mysqli_fetch_array($result);

echo '<pre>';
var_dump($_POST);
echo '</pre>';
?>

<h1>Enter your login and password</h1>

<form action="#" class="login_form" method="post">
    <ul>
        <li><label for="login">Login</label></li>
        <li><input type="text" class="login" name="login" id="login" required></li>
        <li><label for="password">Password</label></li>
        <li><input type="password" class="password" name="password" id="password" required></li>
        <li><input type="submit" class="submit" value="LOGIN"></li>
    </ul>
</form>
<?php
if ($row['login'] == $login && $row['password'] == $password){
echo 'LOGIN SUCCESS! WELCOME TO FRONTEND!';
} else {
echo 'Wrong password or login';
}
?>
<style>
    li {
        list-style-type: none;
        padding: 10px;
    }
</style>