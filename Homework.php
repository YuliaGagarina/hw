<?php
$my_name = 'Yulia';

 echo("$my_name\n");



$unknown_word = 'concatenated';
echo ('This is a ');
echo ($unknown_word);
echo (' string ');
/* Пробел после string в 11 строке я поставила
* потому что у меня не работает перенос строки;
*/
echo ("\n");



$a = 'I don\'t know what to write';
$b = 15415;
$c = true;
$d = 1.3543543658454;

echo 'Variable $a is ';
echo gettype ($a);
echo ("\n");

echo 'Variable $b is ';
echo gettype ($b);
echo ("\n");

echo 'Variable $c is ';
echo gettype ($c);
echo ("\n");

echo 'Variable $d is ';
echo gettype ($d);
echo ("\n");



$words = array('scripting', 'development', 'PHP', 'especially');

echo ('\'');
echo $words[2];
echo (' is a popular general-purpose ');
echo $words[0];
echo (' language that is ');
echo $words[3];
echo (' suited to web ');
echo $words[2];
echo ('\'');
/* Я не уверена, нужны ли одинарные
* кавычки
* но
* на всякий случай
* проставила и вверху и внизу))))
*/