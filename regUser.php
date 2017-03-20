<?php
	include 'User.php';
	
	$name_ = $_POST['name'];
	$name_ = htmlspecialchars(strip_tags($name_));
	$email = $_POST['email'];
	$email = htmlspecialchars(strip_tags($email));
	$pass = $_POST['password'];
	$pass = htmlspecialchars(strip_tags($pass));
	
	$createUser = new User($name_, $email, $pass);
	$createUser->registerUser();
	header("location: login.php");
?>