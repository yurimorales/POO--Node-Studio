<?php

// close
// construct *
// invoke *
// toString * 
// get *
// set *

class Pessoa
{
	private $dados = [];

	public function __set($nome, $valor)
	{
		$this->dados[$nome] = $valor;
	}

	public function __get($nome)
	{
		return $this->dados[$nome];
	}

	public function __toString()
	{
		return "Tentei imprimir o objeto!";
	}

	public function __invoke()
	{
		return "Objeto como função!";
	}

}

$pessoa = new Pessoa();

$pessoa->nome = "Alan Turing"; // -> __set
$pessoa->idade = 33; // -> __set
$pessoa->profissao = "matemático"; // -> __set

// echo $pessoa(); -> __invoke
// echo $pessoa; -> __toString
// echo $pessoa->nome; -> __get




