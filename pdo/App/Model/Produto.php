<?php

namespace App\Model;

class Produto 
{
	
	private $id;
	private $nome;
	private $descricao;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    return $this->descricao = $descricao;
	}

}