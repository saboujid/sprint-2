<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$dbhost = 'localhost';
$user = 'seteam17';
$pass = 'XFc73r0J';
$db = 'Corona';


$conn = mysqli_connect($dbhost, $user, $pass, $db);
if ($conn->connect_error) {
    echo "<script type='text/javascript'>alert('Connection Failed');</script>";
}
