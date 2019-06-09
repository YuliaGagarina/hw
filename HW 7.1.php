<?php

include_once 'HW 7.1.html';

	if (empty ($_POST)) {
		return "Error!";
	} else {
		$action = $_POST ['action'];
		$allowed = ['sum','mult','diff','div'];
		
		if (in_array ($action, $allowed)) {
			switch ($action) {
				case 'sum':
				$arg1 = $_POST['arg1'];
				$arg2 = $_POST['arg2'];
				echo $arg1+$arg2;
				break;
				case 'mult':
				$arg1 = $_POST['arg1'];
				$arg2 = $_POST['arg2'];
				echo $arg1*$arg2;
				break;
				case 'diff':
				$arg1 = $_POST['arg1'];
				$arg2 = $_POST['arg2'];
				echo $arg1-$arg2;
				break;
				case 'div':
				$arg1 = $_POST['arg1'];
				$arg2 = $_POST['arg2'];
				if ($arg2 == 0) {
					echo "Error!";
				}
				echo $arg1/$arg2;
				break;
			}
		}
	}
/* Я не очень знаю, как сделать поле для вывода результата
* от обработчика. Недостаточно глубоки знания html. 
* Но вроде работает.
* И с фантазией на проверки у меня не обчень.
*/