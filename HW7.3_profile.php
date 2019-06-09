<?php

session_start ();

if (!isset ($_SESSION ['user']) {
		echo 'Idon\'t know you...';
		return;
}

$user = $_SESSION ['user'];

if (empty ($_POST)) {
	echo 'Empty fields';
	return;
}

$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$adress = $_POST['adress'];


$_SESSION ['first_name'] = $first_name;
$_SESSION ['second_name'] = $second_name;
$_SESSION ['adress'] = $adress;
?>
<p> Пользователь: <?= $user['username'];?><p>
<br>
<p> Имя пользователя: <?= $first_name.$second_name;?><p>
<p> Адрес пользователя: <?= $adress;?><p>	
<a href="HW7.3_logout.php">Log out</a>