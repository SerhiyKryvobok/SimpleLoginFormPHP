<?php
	session_start();
	
	if ($_SESSION['validate'] == true) {
		header('Location: login.php');
		exit;
	}

?>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Login Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<form class="needs-validation" action="validate.php" method="post">
			<div>
				<label>Login:</label>
				<input type="text" name="username" placeholder="username" required autofocus>
				<label>Password:</label>
				<input type="password" name="pass" placeholder="password" required>
				<input type="submit" name="submit" value="Login"><br />
			</div>
			<?php echo $_SESSION['msg']; ?>
		</form>
	</div>
</body>

</html>