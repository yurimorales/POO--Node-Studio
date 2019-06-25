<?php 

class Veiculo
{
	public $modelo;
	public $cor;
	public $ano;

	public function andar()
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
$car->modelo = "Gol G5";
$car->cor = "preto";
$car->ano = 2018;
var_dump($car);
$car->ligarLimpadorParabrisa();

$moto = new Moto();
$moto->modelo = "CG Titan 150";
$moto->cor = "azul";
$moto->ano = 2019;
var_dump($moto);
$moto->darGrau();




