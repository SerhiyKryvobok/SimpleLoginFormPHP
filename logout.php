<?php
	session_start();
	
	if ($_SESSION['validate'] != true) {
	header('Location: index.php');
	exit;
	}
	
	session_destroy();
	header('Location: index.php');
	exit;
?>