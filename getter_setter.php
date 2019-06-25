<?php 

class Login
{

	public $email;
	public $password;

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}

	public function getPassword()
	{
	    return $this->password;
	}
	
	public function setPassword($password)
	{
	    return $this->password = $password;
	}

	public function logar()
	{
		$email = $this->getEmail();

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		if ($email == 'teste' && $this->getPassword() == 'teste123@') { 
			echo "logado!!";
		}else{
			echo "Inválido.";
		}

	}
	
}

$login = new Login();
$login->setEmail("lololo");
$login->setPassword("teste123@");
$login->logar();
