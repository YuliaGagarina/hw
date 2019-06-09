<?php

include_once 'HW 7.2.html';

define ("COEF_C", "0.55");
define ("COEF_F", "1.8");
	if (empty ($_POST)) {
		return "Error!";
	} else {
		$action = $_POST ['action'];
		$allowed = ['Cels','Far'];
		
		if (in_array ($action, $allowed)) {
			switch ($action) {
				case 'Cels':
				$arg1 = $_POST['arg1'];
				$result = $arg1 * COEF_F+32;
				echo "$result".'F';
				break;
				case 'Far':
				$arg1 = $_POST['arg1'];
				$result = ($arg1-32) * COEF_C;
				echo "$result".'C';
				break;
			}
		}
	}