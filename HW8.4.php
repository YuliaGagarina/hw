*<?php

echo 'Ex#4';
echo "<br>";
echo '08.05.2019';
echo "<br>";

class MyArraySorter
{
	private $myArray = [];
	
	public function __construct($myArray)
	{
		$this->myArray = $myArray;
		$this->myArray = $this->sortArray ($this->myArray);
		
	}
	private function sortArray($myArray)
	{
		sort ($this->myArray);
		foreach ($this->myArray as $key => $value) {
			return $this->myArray;
		}
	}
	public function getArray()
	{
		return $this->myArray;
	}
}

$myArray = new MyArraySorter ([3,1,4,5]);
var_dump ($myArray->getArray());