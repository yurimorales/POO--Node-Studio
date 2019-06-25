<?php

require 'classes/produto.php';
require 'models/produto.php';

// $produto = new \classes\Produto();
// $produto->detalhes();

// $produto = new \models\Produto();
// $produto->detalhes();

use models\Produto as ProdutoModelo;
use classes\Produto as ProdutoClasse;

$produto = new ProdutoModelo();
$produto->detalhes();

$produto = new ProdutoClasse();
$produto->detalhes();


