<?php

namespace App\Model;

class ProdutoDAO
{

	public function create(Produto $produto)
	{

		$sql = "INSERT INTO produtos(nome, descricao) VALUES(?, ?)";

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $produto->getNome());
		$stmt->bindValue(2, $produto->getDescricao());
		$stmt->execute();

	}

	public function read()
	{

		$sql = "SELECT * FROM produtos";

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {

			return $stmt->fetchAll(\PDO::FETCH_ASSOC);

		} else {

			return [];

		}

	}

	public function update(Produto $produto)
	{

		$sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $produto->getNome());
		$stmt->bindValue(2, $produto->getDescricao());
		$stmt->bindValue(3, $produto->getId());
		$stmt->execute();

	}

	public function delete($produto_id)
	{

		$sql = "DELETE FROM produtos WHERE id = ?";

		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $produto_id);
		$stmt->execute();
		
	}

}