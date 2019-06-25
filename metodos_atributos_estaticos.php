<?php

class Login
{
	
	public static $user;

	public static function verifyLogin()
	{
		echo 'O usuário ' . self::$user . ' está logado.';
	}

	public function logout()
	{
		echo 'O usuário ' . self::$user . ' saiu do sistema.';
	}

}

Login::$user = "admin";
Login::verifyLogin();

$login = new Login();
$login->logout();
// (new Login())->logout();