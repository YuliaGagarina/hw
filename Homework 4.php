<?php

echo 'Homework #4';
echo "<br>";
echo '24.04.2019';
echo "<br>";
echo "Execise #1";
echo "<br>";
function factorial ($n) {
	for ($i = 1, $j = 1; ; $result = $i*$j, $i = $result, $j++){
		if ($j == $n+1) {
			return $result;
			break;
		}
	}
}
echo factorial (5);
echo "<br>";
echo factorial (7);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Execise #2";
echo "<br>";
function doWhatIWant ($a) {
	$arr_a = str_split ($a, 1);
	krsort ($arr_a);
	foreach ($arr_a as $key => $val) {
		return $a = implode ('', $arr_a);
	}
}
echo doWhatIWant ('sorting');
/*  Я почувствовала себя обманутой, 
* когда нашла вот это strrev
*/
echo "<br>";
echo "<br>";
echo "Execise #3";
echo "<br>";
function findMeWhatIWant ($array, $num) {
	foreach ($array as $key => $value) {
		if ($value === $num) {
			return "Congradulations! Your key is $key!";
			break;
		} 
	}	
}
$myArray = array (5, 16, 25, 118, 8, 24, 95);
$myNum = 8;
echo findMeWhatIWant ($myArray, $myNum);
