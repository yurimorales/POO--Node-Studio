<?php

class Person
{

	public $name;
	public $age;

	public function speak()
	{
		echo "I am speaking...";
	}

	public function personSpeaking()
	{
		echo $this->name . ", ele têm " . $this->age . " anos e está falando...";
	}

}

$person = new Person();
$person->name = "Yuri";
$person->age = 29;

var_dump($person);

echo $person->personSpeaking();
