<?php 
session_start(); 
include 'Book.php'; 
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/css.css">
	<style>
		table {
			border:1px solid #000;
			border-collapse: collapse;
			width: 500px;
		}
		th,td {
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<header id="master-head">
			<!--<?php //include 'header.php'; ?> -->
			<nav>
			<ul>
				<li><a href="index.php">All users</a></li>
				<li><a href="books.php" class="clicked">All books</a></li>
				<li><a href="orders.php">All orders</a></li>
				<li><a href="createBook.php">Add book</a></li>
				<?php if(isset($_SESSION['user'])) {
					echo 'Hello, '.$_SESSION['user'].'! <a href="logout.php">Logout</a>';
				}
				else {
					echo '<li><a href="reg.php">Register</a></li>
					<li><a href="login.php">Login</a></li>';
				}
				?>
			</ul>
		</nav>
		</header>
		<div id="main-part">
			<h1>All books!</h1>
			<p style="color:green"><?php if(isset($_GET['res'])) {echo $_GET['res'];} ?></p>
			<table>
				<thead>
					<tr>
						<th>bookId</th>
						<th>bookHead</th>
						<th>bookAuthor</th>
						<th>bookPrice</th>
						<th>Delete book</th>
						<th>Buy book</th>
					</tr>
				</thead>
			<?php 
				$allBooks = $b->getAllBooks();
				if(isset($_SESSION['user'])) {
						foreach ($allBooks as $value) {
							echo '<tr>';
							$bi = null;
							foreach ($value as $value2) {
								echo '<td>'.$value2.'</td>';
								$bi = $value['bookId'];
							}
								if($_SESSION['user'] == 'Admin') {
									echo '<td><a href="delete.php?id='.$bi.'">Delete book</a></td>';
								}
									echo '<td></td><td><a href="buyBook.php?id='.$bi.'">Buy book</a></td></tr>';
							}					
				}

			 ?>
			</table>

		</div>
		<footer>
			<p>&copy; Trainsoft PHP-2, 2016</p>
		</footer>	
	</div>
</body>
</html>