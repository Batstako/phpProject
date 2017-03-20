<?php session_start(); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	<div id="wrapper">
		<header id="master-head">
			<nav>
				<ul>
					<li><a href="index.php">All users</a></li>
					<li><a href="books.php">All books</a></li>
					<li><a href="orders.php">All orders</a></li>
					<li><a href="createBook.php"  class="clicked">Add book</a></li>
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
			<h1>Add book</h1>
			<form method="post" action="addBook.php">
				Heading: <input type="text" name="bookHead" />
				Author: <input type="text" name="author" required />
				Price: <input type="text" name="price" />
				<input type="submit" value="Add book" />
 			</form>
		</div>
		<footer>
			<p>&copy; Trainsoft PHP-2, 2016</p>
		</footer>	
	</div>
</body>
</html>