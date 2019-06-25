<?php 

abstract class Banco
{

	protected $saldo = 0.05;
	protected $limite = 2000.00;
	protected $juros = 0.00;

	abstract protected function sacar($value);
	abstract protected function depositar($value);

	public function getSaldo()
	{
	    return $this->saldo;
	}
	
	public function setSaldo($saldo)
	{
	    return $this->saldo = $saldo;
	}
}

class BB extends Banco{

	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
	}

}

$bb = new BB();
echo '<br>Seu saldo atual é: R$ ' . $bb->getSaldo();

$bb->depositar(500.00);
echo '<br>Depois do depósitio, saldo ficou: R$ ' . $bb->getSaldo();

$bb->sacar(150.00);
echo '<br>Sacou: R$ 150.00. Seu saldo atualizado é: R$' . $bb->getSaldo();

$bb->depositar(1500.00);
echo '<br>Depositou: R$ 1500.00. Seu saldo atualizado é: R$' . $bb->getSaldo();