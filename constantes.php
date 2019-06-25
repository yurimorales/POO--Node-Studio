<?php 

class Person
{	

	const nome = "Yuri";

	public function getNome()
	{
		return self::nome;
	}

}

class Funcionario extends Person
{

	const nome = "Desenvolvedor N2";

	public function getNome()
	{
		// return self::nome;
		return parent::nome;
	}
}

echo (new Funcionario())->getNome();

