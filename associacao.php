<?php

class Cliente
{
	public $nome;
	public $endereco;
}

class Pedido
{
	public $numero;
	public $cliente;
}

$cliente = new Cliente();
$cliente->nome = "Felizberto";
$cliente->endereco = "Rua dos bobos, nº 0";

$pedido = new Pedido();
$pedido->numero = 152548;
$pedido->cliente = $cliente;

$dados = [
	'numero' => $pedido->numero,
	'cliente' => $pedido->cliente->nome,
	'endereco-cliente' => $pedido->cliente->endereco
];

var_dump($dados);