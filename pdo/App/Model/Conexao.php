<?php

namespace App\Model;

class Conexao
{

	// Padrão DAO - Data Acess Object
	private static $instance;

	public static function getConn()
	{

		if (!isset(self::$instance)) {

			self::$instance = new \PDO("mysql:host=localhost;dbname=teste;charset=utf8", 'root', '');

		}

		return self::$instance;

	}

}