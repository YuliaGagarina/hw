<?php

echo 'Ex#3. Version 1.0';
echo "<br>";
echo '08.05.2019';
echo "<br>";


class MyCalculator 
{
	public $arg1;
	public $arg2;
	private $number;
	private $answer;

	public function __construct($number)
	{
			$this->number = $number;
			$this->answer = $this-> factorial ($number);
	}
	
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
	
	public function calcSum($arg1, $arg2)
	{
		$this->arg1 = $arg1;
		$this->arg2 = $arg2;
		$this->answer = $arg1+$arg2;
		echo $this->answer;
	}	
	public function calcDiff($arg1, $arg2)
	{
		$this->arg1 = $arg1;
		$this->arg2 = $arg2;
		$this->answer = $arg1-$arg2;
		echo $this->answer;
	}		
	public function calcMult($arg1, $arg2)
	{
		$this->arg1 = $arg1;
		$this->arg2 = $arg2;
		$this->answer = $arg1*$arg2;
		echo $this->answer;
	}	
	public function calcDiv($arg1, $arg2)
	{
		$this->arg1 = $arg1;
		$this->arg2 = $arg2;
		$this->answer = $arg1/$arg2;
		/*function check($arg2) {
		*	if ($arg2 == 0){
		*		echo 'Error!';
		*		exit;
		*	} return $this->answer = $arg1/$arg2;
		*
		* Подскажите мне, что мне сделать, чтобы проверка 
		* работала
		*/
		
		echo $this->answer;
	}		
}
$mathFactorial = new MyCalculator (7);
$mathFactorial->calcFactorial(7);
$mathFactorial->calcSum(7,4);
$mathFactorial->calcDiv(7,4);
$mathFactorial->calcDiff(7,4);
$mathFactorial->calcMult(7,4);
$mathFactorial->calcDiv(7,0);