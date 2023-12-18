<?php
session_start();


$_SESSION['user_id'] = 123;
$_SESSION['username'] = 'Andreas_Pascalis';

$userID = $_SESSION['user_id'];
$username = $_SESSION['username'];

// menampilkan data
echo "User ID: $userID<br>";
echo "Username: $username";
?>
