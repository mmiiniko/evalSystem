<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "accounts");


// Storing Session
$user_check = $_SESSION['login'];

// SQL Query To Fetch Complete Isnformation Of User
$res= mysqli_query($conn, 'SELECT * FROM accounts WHERE username = "' .$_SESSION['login'] .'" ');
$row = mysqli_fetch_array($res);
?>