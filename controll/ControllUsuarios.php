<?php
namespace controll;

use classes\Usuarios;


class ControllUsuarios{
	private $Usuario;

	public function __construct()
	{
		$this->Usuario = new Usuarios;
	}

	public function creatUsuario( $nome,  $username,  $email,  $senha )
	{ 
		$this->Usuario->setAttrUsuario( $nome,  $username,  $email,  $senha );	
		return $this->Usuario->saveUsuario( );	
	}

	public function editUsuario( $nome,  $username,  $email,  $senha,  $id )
	{
		$this->Usuario->setAttrUsuario( $nome,  $username,  $email,  $senha,  $id );	
		return $this->Usuario->editUsuario();	
		
	}
	
	public function delUsuario($id)
	{
		$this->Usuario->setId( $id );	
		return $this->Usuario->deletarUsuario();	
	}
	
	public function getUsuario($id)
	{
		$this->Usuario->setId( $id );	
		return $this->Usuario->getUsuario();	
	}
	
	public function getAllUsuarios()
	{
		return $this->Usuario->getListUsuario();	
	}
	
	public function login( $login, $key )
	{ 

		$this->Usuario->setUserName( $login );	
		$this->Usuario->setEmail( $login );	
		$this->Usuario->setSenha( $key );	
 
		return $this->Usuario->login( ); 
	}
}