<?php

session_start ();

$user = [
	'login' => 'Anna',
	'password' => '@2012',
	'username' => 'NaughtyGirl',
	];

if (empty ($_POST)) {
	echo 'Invalid data';
	return;
}
$login = $_POST ['login'];
$password = $_POST ['password'];

if (($login == $user['login']) && ($password == $user['password'])) {
	$_SESSION['user'] = $user;
	header ('Location: HW7.3_name_adr.html');
} else {
	echo 'Invalid password or login';
	return;
}