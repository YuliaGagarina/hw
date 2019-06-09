<?php

echo 'Ex#5';
echo "<br>";
echo '08.05.2019';
echo "<br>";

class Accounting
{
//	public $users = [];
	public $user = [];
	
	public function __construct (array $user)
	{
		$this->user = $user;
/*		$this->users[0] = $user;
* Я так и не додумалась, как в этот массив записать
* изменения, которые я буду вносить функциями, описанными ниже. 
* Поэтому я приняла стратегическое решение, что массив
* у меня здесь будет один.
*/
	}
	
	public function setOrEditUserData ($name, $value)
	{
		$this->user[$name] = $value;
		return $this->user[$name];
/* Эта функция для изменения данных о пользователе
* и для добавления новых данных о том же пользователе.
*/
	}
	
	public function getUserData ($name)
	{
		if ($this->user[$name] === 'tax') {
			return $this->user['tax']*$this->user['amount'];
			// Не хочет почему-то считать. Наверное потому что в условии if.
		}	else {
			return $this->user[$name];
		}
	}
/*	public function insertUserData (array $user)
*	{
*		if ($this->user === $user) {
*			echo 'The user exists!';
*		}
*		$this->users[] = $user;
*		echo 'New user is added!';
*	}
* Эту функцию я хотела использовать для добавления новых пользователей в массив. 
* Но. Как я уже писала выше, я не знаю, как мне записать потом изменения в данных пользователя в общий массив.
* И, допустим, я знаю, что пользователей у меня два. Ну три. И индексы их в массиве 
* я, соответственно, тоже знаю. А если их будет сто миллионов? Как мне вычислить ключ 
* этого пользователя в массиве, и вносить туда изменения?
* Поэтому от этой идеи я отказалась.
*/
		
	public function unsetUserData ($name, $value)
	{
		if  ($this->user[$name] == $value){
			unset ($this->user);
			echo 'User is deleted!';
		}
/* Здесь мне все прекрасно удалилось. А потом в браузере всплыла заметка:
* Вы спрашиваете неопределенное свойство. 
* Это нормально?
*/			
	}
	
	public function calcTax ()
	{
		return $this->user['name'].' payed this month '.$this->user['amount']*$this->user['tax'].' dollars.';
	}	
	
}

$user1 = array ('name' => 'Antonio Banderas', 'age' => '28', 'checkingAccount' => 542367, 'amount' => 5000, 'tax' => 0.25);
$user2 = array ('name' => 'Johny Depp', 'age' => 35, 'checkingAccount' => 849512, 'amount' => 10000, 'tax' => 0.12);	
$user3 = array ('name' => 'Tom Hardy', 'age' => 38, 'checkingAccount' => 469973, 'amount' => 8000, 'tax' => 0.18);
$user4 = array ('name' => 'James Mac\'Avoy', 'age' => 26, 'checkingAccount' => 328561, 'amount' => 12000, 'tax' => 0.2);

$request = new Accounting($user2);
echo $request->calcTax();
echo "<br>";
echo $request->getUserData('age');
echo "<br>";
echo $request->getUserData('tax');
echo "<br>";
echo($request->setOrEditUserData('sex', 'male'));
echo "<br>";
var_dump ($request->user);
echo "<br>";
echo "<br>";

