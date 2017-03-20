<?php 
	include 'Book.php';
	$head = $_POST['bookHead'];
	$head = htmlspecialchars(strip_tags($head));
	$author = $_POST['author'];
	$author = htmlspecialchars(strip_tags($author));
	$price = $_POST['price'];
	$price = htmlspecialchars(strip_tags($price));

	$b = new Book($head, $author, $price);
	$b->createBook($head);

	header("location: index.php");
 ?>