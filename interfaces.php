<?php

interface Crud
{

	// Aqui, define oe métodos, os quais as suas classe que a utilizarem
	// deveram obrigatoriamente implementa-los
	public function create();
	public function read();
	public function update();
	public function delete();

}

// Ao invés do 'extends' de Herança, utiliza-se agora 'implements'
class Noticias implements Crud
{

	// Define os 'contratos'
	public function create()
	{

	}

	public function read()
	{
		
	}

	public function update()
	{
		
	}

	public function delete()
	{
		
	}
	
}



