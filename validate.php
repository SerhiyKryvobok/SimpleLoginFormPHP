<?php

session_start();

$_SESSION['msg'] = '';

if ($_SESSION['count'] == 3) {
	if (time() - $_SESSION['last_login'] < 30) {
		$_SESSION['msg'] = 'Wait for 30sec';
		header('Location: index.php');
		exit;
	} else {
		$_SESSION['count'] = 1;
	}
} elseif (empty($_SESSION['count'])) {
	$_SESSION['count'] = 1;
} else {
    $_SESSION['last_login'] = time();
	$_SESSION['count']++;
}

if (isset($_POST['username'])&&(isset($_POST['pass']))) {
	
	$_SESSION['validate'] = false;	
	
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	
	$userlist = file('login.txt');
	
	foreach ($userlist as $user) {
		$user_details = explode('|', $user);
//		var_dump($user_details[0],$user_details[1]);
//		var_dump($username,$pass);
		if (($username == $user_details[0])&&($pass == $user_details[1])) {
			$_SESSION['validate'] = true;
			$_SESSION['msg'] = '';
			header('Location: login.php');
			exit;
		} else {
			$_SESSION['msg'] = 'Wrong username or password';
			header('Location: index.php');
			//exit;
		}
	}
	
} elseif ($_SESSION['validate'] == true) {
	header('Location: login.php');
	exit;
} else {
	header('Location: index.php');
	exit;
}

?>