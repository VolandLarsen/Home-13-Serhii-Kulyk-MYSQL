<?php
$mysqli = new mysqli('localhost', 'root', 'Lord64876', 'user_data');
if (mysqli_connect_errno()) {
    echo 'Ooops, something is wrong! Please try again later.';
    exit;
}
echo 'Connection succes! <br>';