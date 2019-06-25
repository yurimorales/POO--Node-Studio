<?php 

class Person
{

	public function __construct($name)
	{
		echo "Olá " . $name . " :)";
	}

}

$person = new Person("Yuri");

