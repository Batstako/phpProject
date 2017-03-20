<?php 
	include 'User.php';
	class Book extends User {
		public $heading;
		public $author;
		public $price;

		function __construct($h='', $a='', $p=0) {
			$this->heading = $h;
			$this->author = $a;
			$this->price = $p;

			User::__construct();
		}
		function createBook($name) {
			if($this->checkUser($name, 'books', 'bookHead')) {
				$sql = "INSERT INTO books(bookHead, bookAuthor, bookPrice) 
				VALUES ('".$this->heading."', '".$this->author."',$this->price)";
				$res = mysqli_query($this->link, $sql);
			}
		}
		function getAllBooks() {
			$sql = 'select * from books';
			$query = mysqli_query($this->link, $sql);
			$arr = array();
			while($row = mysqli_fetch_assoc($query)) {
				$arr[] = $row;
			}
			return $arr;
		}
		function deleteBook($id) {
			$sql = 'delete from books where bookId ='.$id;
			$res = mysqli_query($this->link, $sql);
		}
		function buyBook($custId, $bookId) {
			$sql = "INSERT INTO orders(customerId, bookId, orderDate) 
				VALUES ($custId, $bookId, NOW())";
				$res = mysqli_query($this->link, $sql);
		}
		function getAllOrders() {
			$sql = 'select orders.orderId, customers.customerName, books.bookHead
			,books.bookAuthor from orders 
			join customers on orders.customerId = customers.customerId
			join books on orders.bookId = books.bookId';
			$res = mysqli_query($this->link, $sql);
			$arr = array();
			while($row = mysqli_fetch_assoc($res)) {
				$arr[] = $row;
			}
			return $arr;
		}
	}
	$b = new Book();
 ?>