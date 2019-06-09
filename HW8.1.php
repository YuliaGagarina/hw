<?php


echo 'Ex#1';
echo "<br>";
echo '08.05.2019';
echo "<br>";
class Into
{
	private $className;
	
	public function __construct()
	{
		return $this->className = __CLASS__;
	}
	public function getClassName ()
	{
		return $this->className;
	}
}

$class = new Into();
echo $class->getClassName();