<?php

session_start();

if ($_SESSION['validate'] != true) {
	header('Location: index.php');
	exit;
}

?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<p>Congrats! You have logged in!</p>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
