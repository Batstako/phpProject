<?php 
	include 'Book.php';
	$b->deleteBook($_GET['id']);
	header('location: books.php');
 ?>