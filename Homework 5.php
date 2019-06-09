<?php

echo 'Homework #5';
echo "<br>";
echo '24.04.2019';
echo "<br>";
echo "Execise #1";
echo "<br>";
function showMe ($array) {
	sort ($array);
	foreach ($array as $key => $value){
	}
	echo $array[0].' is minimum'."<br>";
	rsort ($array);	
	foreach ($array as $key => $value) {
	}	
	echo $array[0].' is maximum'."<br>";
}

$arr = array (1, 2, 3, 5, 8, 13, 21);
echo showMe ($arr);
$arr1 = array (2, 19, 58, 1146, 27, 6);
echo showMe ($arr1);
$arr2 = array (0.49, 6.34, 25.1, 18);
echo showMe ($arr2);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Execise #2";
echo "<br>";
/* Я в принципе нашла пример, как это сделать 
* правильнее. Но принципиально его не стала 
* копировать. 
* И я была бы очень благодарна, если бы 
* Вы мне в ответ на нестандартные решения
* хотя бы схематически подсказывали 
* стандартные.
*/
function checkPL ($string): bool {
	$string = str_replace (' ', '', $string);
	$string = strtolower ($string);
	$a = strlen ($string);
	$aa = ($a - 1)/2;
	$b = substr ($string, ($aa));
	/* И еще вопрос. Почему, когда я пыталась воспользоваться функцией strstr,
	* и точкой отсчета указывала переменную, ничего не происходило?
	* оно так не работает или я что-то не знаю?
	*/
	$arr_str = str_split ($string, 1);
	$arr_str = array_reverse ($arr_str);
	$string1 = implode ('', $arr_str);
	$c = substr ($string1, $aa);
	if ($c === $b) {
		return true;
	} 	
	    echo "Sorry!";
		/*исключительно для того, чтобы оно что-то показывало вместо 
		* false = ничего...
		*/
		return false;
		
}

echo checkPL ('ghbdtn');
echo "<br>";
echo checkPL ('alla ha lla');
/* Кириллицу не обрабатывает почему-то...
*/
echo "<br>";
echo "<br>";
echo "Execise #3";
echo "<br>";
/* Вот это задание засчитывать не нужно. 
* Я его честно передрала.
* Но я в нем разобралась.
* И написала его, потому что без него домашка была бы неполная.
*/
function Luhn ($mySufferings): bool {
	$mySufferings = strrev ($mySufferings);
	$mySuff = str_replace (' ', '', $mySufferings);
	$sum = 0;
	for ($i = 0, $k = strlen ($mySuff); $i < $k; $i++) {
		if (($i % 2) == 0) {
		$val = $mySuff[$i];
		} else {
			$val = $mySuff[$i]*2;
			if ($val > 9) {
				$val -= 9;
			}
		} $sum +=$val;
	}	
	if (($sum % 10) ===0) {
		return true;
	} 
		return false;
}

echo Luhn('5375 4141 1009 2714');