<?php 
	session_start();
	include 'Book.php';
	//$date = date("Y-m-d H:i:s");
	$bookId = $_GET['id'];
	$userId = $_SESSION['id'];
	$b->buyBook($userId, $bookId);
	header('location: books.php?res=ЧЕСТИТО!!! Вашата поръчка е добавена!!!');
 ?>