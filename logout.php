<?php
	include 'logUser.php';
	$user->logoutUser();
	/*include 'User.php';
	$u = new User();
	$u->logoutUser();*/
	header("location: index.php");
?>