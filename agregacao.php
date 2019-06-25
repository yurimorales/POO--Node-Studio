<?php

class Produtos
{
	public $nome;
	public $valor;

	public function __construct($nome, $valor)
	{
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Carrinho
{
	public $produtos;
	protected $totalCompras = 0.00;

	public function adiciona(Produtos $produto)
	{
		$this->produtos[] = $produto;
	}

	public function exibe()
	{
		foreach ($this->produtos as $produto) {

			echo '<p>' . $produto->nome . " - R$ " . $produto->valor . '</p>'; 
			$this->totalCompras += $produto->valor;
			
		}
	}

	public function totalCompras()
	{
		return $this->totalCompras;
	}

}

$produto_1 = new Produtos("HD SSD kingston 240 GB", 215.00);
$produto_2 = new Produtos("Mem. ram 8GB notebook DDR4", 170.00);

$cart = new Carrinho();
$cart->adiciona($produto_1);
$cart->adiciona($produto_2);

$cart->exibe();
echo '<p> Valor das compras: R$ ' . $cart->totalCompras() . '</p>';




