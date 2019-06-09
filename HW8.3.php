<?php

echo 'Ex#3. Version 2.0';
echo "<br>";
echo '08.05.2019';
echo "<br>";


class MyCalculator 
{
	private $arg1;
	private $arg2;
	private $answer;
	private $rule;
	
	public function calculate($rule, $arg1, $arg2)
	{
		switch ($rule) {
			case 'sum':
				$this->arg1 = $arg1;
				$this->arg2 = $arg2;
				$this->answer = $arg1+$arg2;
			return $this->answer;
			break;
			case 'diff':
				$this->arg1 = $arg1;
				$this->arg2 = $arg2;
				$this->answer = $arg1-$arg2;
			return $this->answer;		
			break;
			case 'mult':
				$this->arg1 = $arg1;
				$this->arg2 = $arg2;
				$this->answer = $arg1*$arg2;
			return $this->answer;	
			break;
			case 'div':
				$this->arg1 = $arg1;
				$this->arg2 = $arg2;
					if (!$this->arg2) {
						echo 'Error!';
						break;
					}
				$this->answer = $arg1/$arg2;
			return $this->answer;		
			break;
			case 'fact':
				$this->arg1 = $arg1;
				for ($i = 1, $j = 1; ; $result = $i*$j, $i = $result, $j++){
					if ($j == $arg1+1) {
					return $result;
				break;
				}
			}	
		}	
	}
}
$results = new MyCalculator ();
echo "<br>";
echo $results->calculate('fact',7,0);
echo "<br>";
echo $results->calculate('sum',7,4);
echo "<br>";
echo $results->calculate('diff',7,4);
echo "<br>";
echo $results->calculate('mult',7,4);
echo "<br>";
echo $results->calculate('div',7,0);
echo "<br>";
echo $results->calculate('div',7,4);
echo "<br>";