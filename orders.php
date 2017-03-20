<?php session_start(); include 'Book.php'; ?>
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
			<nav>
				<ul>
					<li><a href="index.php">All users</a></li>
					<li><a href="books.php">All books</a></li>
					<li><a href="orders.php" class="clicked">All orders</a></li>
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
			<h1>All orders!</h1>
			<table>
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Customer Name</th>
						<th>Book Name</th>
						<th>Book Author</th>
					</tr>
				</thead>
			<?php 
				$allOrd = $b->getAllOrders();
				if(isset($_SESSION['user'])) {
						foreach ($allOrd as $value) {
							echo '<tr>';
							foreach ($value as $value2) {
								echo '<td>'.$value2.'</td>';
							}
								echo '</tr>';
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