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
					<li><a href="createBook.php">Add book</a></li>
					<li><a href="reg.php" class="clicked">Register</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</header>
		<div id="main-part">
			<h1>Register</h1>
			<form method="post" action="regUser.php">
				Name: <input type="text" name="name" />
				Email: <input type="email" name="email" required />
				Password: <input type="password" name="password" />
				<input type="submit" value="Register" />
 			</form>
		</div>
		<footer>
			<p>&copy; Trainsoft PHP-2, 2016</p>
		</footer>	
	</div>
</body>
</html>