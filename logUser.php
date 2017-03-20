<?php
	include 'User.php';
	$email = $_POST['email'];
	$email = htmlspecialchars(strip_tags($email));
	$pass = $_POST['password'];
	$pass = htmlspecialchars(strip_tags($pass));

	$user = new User('',$email, $pass);
	$user->loginUser($email, $pass);
	header('location: index.php');
