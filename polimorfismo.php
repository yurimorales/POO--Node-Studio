<?php

class Animal 
{

	public function andar()
	{
		echo 'O animal andou...';
	}

	public function correr()
	{
		echo 'O animal correu...';
	}
	
}

class Cavalo extends Animal
{
	// Reescreve o metodo da classe pai,
	// nesse caso, o metodo da classe principal...
	public function andar()
	{
		// echo 'O cavalo andou.';
		// Agora, herda o método da classe pai
		$this->correr();
	}
	
}

echo (new Cavalo())->andar();

