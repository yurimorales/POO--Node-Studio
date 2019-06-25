<?php

// Ocorrencia anormal que afeta o funcionamento do sistema
// Exception é a classe principal
// message, code, file, line

class Newsletter
{

	public function saveEmail($email)
	{

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Email inválido.", 1);
		}

		echo 'Email cadastrado com sucesso!';

	}

}

try{

	$news = new Newsletter();
	$news->saveEmail("camelo_feroz");

}catch(Exception $e){
	echo 'Error code: '. $e->getCode() . ". Message: " . $e->getMessage();
}

