<?php 

// Utilizando padrão singleton, ou seja, apenas uma conexão, para tornar mais rápida a conexao
// Utilizando o padrão PSR-4
 // -> Padrão de carregamento automático de classes

require_once 'vendor/autoload.php';

$product = new \App\Model\Produto();

// $product->setId(8);
$product->setNome("HD SSD Kingston 240GB");
$product->setDescricao("Turbina o teu notebook em 1000%");

$produtoDAO = new \App\Model\ProdutoDAO();
// $produtoDAO->create($product);
// $produtoDAO->update($product);
// $produtoDAO->delete(8);

$resultados = $produtoDAO->read();

foreach ($resultados as $produto) {
	echo $produto['nome'] . ' => ' . $produto['descricao'] . '\n';
}





