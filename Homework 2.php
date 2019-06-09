<?php

declare (strict_types=1);
/* Есть ли возможность у этой функции указать к примеру 2 типа,
* а не один? Например, чтобы $a и $b были типов int и float сразу?
* И, если да, как это делается?
*/ 
echo 'Homework #3. 24.04.2019';
echo "<br>";
echo 'Exercise #1';
echo "<br>";
define ("COEF_C", "0.55");
define ("COEF_F", "1.8");

function translate(int $x, string $tp) {
	if ($tp == 'C') {
		$result = $x * COEF_F+32;
		return $result . 'F';
	}	elseif ($tp == 'F') {
	$result = ($x-32) * COEF_C;
	return $result . 'C';
	}
	return 'I don\'t understand what you want...';
}

echo translate (90, 'F');
echo "<br>";
$x = 21;
$tp = 'C';
echo translate ($x, $tp);
echo "<br>";
echo translate (17, 'FFF');

echo "<br>";
echo "<br>";
echo 'Exercise #2';
echo "<br>";
function calc (string $operation, int $a, int $b) {
	if ($operation == 'sum') {
		return $a+$b;
	}
	elseif ($operation == 'substract') {
		return $a-$b;
	}
	elseif ($operation == 'multiply') {
		return $a*$b;
	}
	elseif ($operation == 'divide') {
		if ($b == 0) {
			return 'ERROR!!!';
		}
		return $a / $b;
	}
	return 'Unknown operation';
}
echo calc ('sum', 5, 15);
echo "<br>";
echo calc ('divide', 15, 3);
echo "<br>";
echo calc ('multiply', 14, 41);
echo "<br>";
echo calc ('divide', 16, 0);
echo "<br>";
echo calc ('plus', 16, 0);
echo "<br>";
echo calc ('sum', 16, 0, 4);
echo "<br>";

/* Мне очень хотелось в мой калькулятор
* вставить сплат оператор, но я не додумалась,
* как это сделать.
*/
function summ (...$numbers) {
return $numbers[0]+$numbers[1]+$numbers[2];
}
echo summ (15, 23, 4); 
echo "<br>";
echo summ (15, 23, 4, 6);
/* Насколько я понимаю, в этом операторе
* сколько проставишь номеров для подсчета суммы, 
* (элементов массива) столько 
* он и посчитает, больше нет?
*/


echo "<br>";
echo "<br>";
echo 'Exercise #3';
echo "<br>";
function checkValid (int $n, $m, string $oper) {
	$arg2 = gettype ($m);
	if ($arg2 == 'string') {
		if($oper == 'lessthan') {
			if ($n < strlen ($m)) {
			return 'true';
			} 
			return 'false';
		} elseif ($oper == 'greaterthan') {
			if ($n > strlen ($m)) {
				return 'true';
			} 
			return 'false';
		}	 elseif ($oper == 'equals') {
			if ($n == strlen ($m)) {
				return 'true';
			}
			return 'false';
		}
	} elseif ($arg2 == 'integer') {
		if($oper == 'lessthan') {
			if ($n < $m) {
			return 'true';
			} 
			return 'false';
		} elseif ($oper == 'greaterthan') {
			if ($n > $m) {
				return 'true';
			} 
			return 'false';
		}	 elseif ($oper == 'equals') {
			if ($n == $m) {
				return 'true';
			}
			return 'false';
		}
	} 
	return 'Unknown argument 2';
}
echo checkValid (7, 'jhfbkhfbjhf', 'equals');
echo "<br>";
echo checkValid (18, 25, 'lessthan');
echo "<br>";
echo checkValid (13, true, 'greaterthan');
echo "<br>";
echo checkValid (44, 'jhfbkhfbjhf', 'greaterthan');
echo "<br>";
echo checkValid (7, 'jhfbkhfbjhf', 'lessthan');
echo "<br>";

/* Я не уверена, что это упражнение выполнила правильно, 
* но оно работает.
*/