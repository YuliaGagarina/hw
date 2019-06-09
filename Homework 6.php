<?php

echo 'Homework #6';
echo "<br>";
echo '24.04.2019';
echo "<br>";
echo "Execise #1";
echo "<br>";
function first_final ($array) {
	$i = count ($array)-1;
	return "First is $array[0] <br>"."Final is $array[$i] <br>";
}

$arr = array ('Monday', 'Tuesday', 'Friday', 'Sunday');
echo first_final ($arr);
echo "<br>";

echo "Execise #2";
echo "<br>";
function cut_str ($string) {
	$n_str = strstr ($string, ', ', true);
	return $n_str;
}
echo cut_str ('1,2,3,4,5,6, , , ');
echo "<br>";

echo "Execise #3";
echo "<br>";

function clean_array ($array){
	$new_array = array_filter ($array);
	$new_array1 = array_unique ($new_array);
	return $new_array1;
}

$array1 = [1,5,5,6,0,null,17];
var_dump (clean_array ($array1));

echo "Execise #4";
echo "<br>";
/* Логика этой задачи выше моего понимания. 
* Даже с Википедией.
* Поэтому я его не сделала.
*/