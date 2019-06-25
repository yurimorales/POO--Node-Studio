<?php

class Pessoa
{
	public $idade;

	// Objeto executa esse metodo mágico, quando um 
	// objeto é clonado, nesse caso, printa a mensagem quando clonado.
	public function __clone()
	{
		echo "Objeto clonado com sucesso.";
	}

}

$person = new Pessoa();
$person->idade = 29;

// $person2 = $person;
$person2 = clone $person;
$person2->idade = 33;

echo $person->idade;
// echo $person2->idade;

