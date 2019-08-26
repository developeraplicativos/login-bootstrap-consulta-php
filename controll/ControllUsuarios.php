<?php
namespace controll;

class ControllUsuarios{
	private $Usuario;

	public function __construct()
	{
		$this->Usuario = new Usuarios;
	}

	public function creatUsuario()
	{
		
		$this->Usuario->setAttrUsuario();
		
	}

	public function editUsuario()
	{
		
	}
	
	public function delUsuario()
	{
		
	}
	
	public function getUsuario()
	{
		
	}
	
	public function getAllUsuarios()
	{
		
	}
}