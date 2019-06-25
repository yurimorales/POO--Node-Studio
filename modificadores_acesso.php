<?php

class Veiculo
{
	public $modelo;
	public $cor;
	public $ano;

	private function andar()
	{
		echo "andou!";
	}

	public function parar()
	{
		echo "parou!";
	}

}

class Carro extends Veiculo
{

	public function ligarLimpadorParabrisa()
	{
		echo "limpando o parabrisa...\n";
	}
}

class Moto extends Veiculo
{

	public function darGrau()
	{
		echo "dando grau em 3, 2, 1...\n";
	}

}

$car = new Carro();
echo $car->andar() . '<br>';

// var_dump($car);

// $moto = new Moto();




