<?php

echo 'Ex#1';
echo "<br>";
echo '11.05.2019';
echo "<br>";


abstract class User
{
	protected $user;
	protected $role;
	protected $userData = [];
	
	protected function canDo ()
	{
		if ($this->role == 'Moderator') {
		return "$this->role".' can decide what you will see.'."<br>";
		}	elseif ($this->role == 'Admin') {
		return "$this->role".' can take your request.'."<br>";
		}	elseif ($this->role == 'Viewer') {
		return "$this->role".', you can just watch. Sorry'."<br>";
		}	echo 'Unknown user!!!';
	}
	
	abstract protected function getRole ();
}

class Admin extends User
{
	public function __construct ($name)
	{
		$this->user = $name;
		$this->role = get_class ($this);
	}
	
	public function setData ($name, $value)
	{
		$this->userData[$name] = $value;
	}
	
	public function getData ()
	{
		return $this->userData;
	}
	
	public function getRole ()
	{
		return $this->user.'\'s role is '. strtolower (__CLASS__)."<br>";
	}
	
	public function whatCanIDo ()
	{
		return $this->canDo();
	}
}

class Viewer extends User
{
	public function __construct ($name)
	{
		$this->user = $name;
		$this->role = get_class ($this);
	}

	public function setData ($name, $value)
	{
		$this->userData[$name] = $value;
		return $this->userData;
	}
	
	public function getRole ()
	{
		return $this->user.'\'s role is '.strtolower ($this->role)."<br>";
	}	
	
	public function whatCanIDo ()
	{
		return $this->canDo();
	}	
}

class Moderator extends User
{
	public function __construct ($name)
	{
		$this->user = $name;
		$this->role = get_class ($this);
	}
	public function setData ($name, $value)
	{
		$this->userData[$name] = $value;
		return $this->userData;
	}
	
	public function getRole ()
	{
		return $this->user.'\'s role is '.strtolower ($this->role)."<br>";
	}		
	public function whatCanIDo ()
	{
		return $this->canDo();
	}
}
/* Для разнообразия я писала в классы немного отличающиеся друг от друга 
* методы.
*/

$user1 = new Admin ('vasia');
echo $user1->getRole();
echo "<br>";
$user2 = new Viewer('masha');
echo $user2->getRole();
$user3 = new Moderator('petya');
echo $user3->getRole();
echo $user1->whatCanIDo();
$user1->setData('age', 25);
$user1->setData('sex', 'f');
var_dump ($user1->getData());
