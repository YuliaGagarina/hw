<?php

echo 'Ex#2';
echo "<br>";
echo '08.05.2019';
echo "<br>";


class MathFactorial 
{
	private $number;
	private $answer;

	public function __construct($number)
	{
			$this->number = $number;
			$this->answer = $this-> factorial ($number);
	}
	// Я так понимаю, что конструктор должен быть публичной функцией?
	// Если нет, то как это сделать, чтобы не было  Fatal Error?
	
	private function factorial ($number) {
	for ($i = 1, $j = 1; ; $result = $i*$j, $i = $result, $j++){
		if ($j == $number+1) {
			return $result;
			break;
			}
		}
	}

	public function calcFactorial()
	{
		return $this->answer;
	}
	
}
$mathFactorial = new MathFactorial (7);
echo $mathFactorial->calcFactorial(7);