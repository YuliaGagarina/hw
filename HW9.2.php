<?php

echo 'Ex#2';
echo "<br>";
echo '11.05.2019';
echo "<br>";


abstract class Transport
{
	protected $motor_type;
	protected $speed;

	abstract protected function getMotorType ();
	abstract protected function accelerate ($speed);
	abstract protected function decelerate ($speed);
}

Interface Fireable
{
	public function shoot ();
	public function getTrackCount ();
}

Interface Wheelable
{
	public function getWheelCount ();
	
}

Interface Automobile extends Wheelable
{
	public function getDoorCount ();
}

class Cars extends Transport implements Automobile
{
	private $wheelCount = 4;
	private $doorCount = 4;
	
	public function __construct ()
	{
		$this->motor_type = 'car engine';
		$this->speed = $this->accelerate ($this->speed);
		$this->speed = $this->decelerate ($this->speed);
	}
	public function accelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}
	public function decelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}
	public function getWheelCount ()
	{
		$this->wheelCount;
		return 'The wheel count of this car is '.$this->wheelCount."<br>";
	}	

	public function getDoorCount ()
	{
		return 'The door count of this car is '.$this->doorCount."<br>";
	}
	public function getMotorType ()
	{
		return 'This vehicle has '.$this->motor_type."<br>";
	}
}

class Bikes extends Transport implements Wheelable
{
	public function __construct ()
	{
		$this->motor_type = 'muscles';
		$this->speed = $this->accelerate ($this->speed);
		$this->speed = $this->decelerate ($this->speed);
	}
	
	public function accelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}
	public function decelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}
	public function getMotorType ()
	{
		return 'This vehicle moves with '.$this->motor_type."<br>";
	}	
	public function getWheelCount ()
	{
		$this->wheelCount;
		return 'The wheel count of this vehicle is '.$this->wheelCount."<br>";
	}	
}

class Tanks extends Transport implements Fireable
{
	private $trackCount = 2;
	
	public function __construct ()
	{
		$this->motor_type = 'tank engine';
		$this->speed = $this->accelerate ($this->speed);
		$this->speed = $this->decelerate ($this->speed);
	}	
	
	public function getMotorType ()
	{
		return 'This vehicle moves with '.$this->motor_type."<br>";
	}	
	
	public function shoot ()
	{
		return 'BANG!'."<br>";
	}
	
	public function getTrackCount ()
	{
		return 'The track count of this vehicle is '.$this->trackCount."<br>";
	}
	
	public function accelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}
	
	public function decelerate ($new_speed)
	{
		$this->speed = $new_speed;
		return 'Now this transort speed is '.$this->speed."<br>";
	}	
}
$car = new Cars();
echo $car->getDoorCount();
echo $car->getMotorType();
$tank = new Tanks();
echo $tank->shoot();
echo $tank->accelerate (15);
