<?php
namespace classes;

use \db\db;
use \Exception;

class Usuarios{
	private $id;
	private $nome;  
	private $username;
	private $email;
	private $senha;
 	private	$banco; 

 	public function __construct()
 	{
 	 	$this->banco = new db;
 	}

 	public function setAttrUsuario(String $nome, String $username, String $email, String $senha, int $id = null)
 	{

		$this->id = $id;
		$this->nome = $nome;  
		$this->username = $username;
		$this->email = $email;
		$this->senha = $senha;
 	}

 	public function getId(){
 		return $this->id;
 	}

 	public function setId($id){
 		$this->id = $id;
 	}
 	
 	public function getNome(){
 		return $this->nome;
 	}

 	public function setNome($nome){
 		$this->nome = $nome;
 	}
 	
 	public function getUserName(){
 		return $this->username;
 	}

 	public function setUserName($username){
 		$this->username = $username;
 	} 	

 	public function getEmail(){
 		return $this->email;
 	}

 	public function setEmail($email){
 		$this->email = $email;
 	} 	

 	public function getSenha(){
 		return $this->senha;
 	}

 	public function setSenha($senha){
 		$this->senha = $senha;
 	}

 	public function verifyAttr($tipo)
 	{
 		switch ($tipo) {
 			case 'edit': 
 				$this->veriricaId();
 			case 'save':  
 				if(!isset($this->nome ) ){
 					throw new Exception("É necessário que o usuario possua um nome", 1); 	
 				}
 				if(!isset($this->username ) ){
 					throw new Exception("É necessário que o usuario possua um username", 1); 	
 				}
 				if( !isset($this->email ) ){
 					throw new Exception("É necessário que o usuario possua um email", 1); 	
 				}

 				if(!isset($this->senha ) ){
 					throw new Exception("É necessário que o usuario possua uma senha", 1); 	
 				}
 				break;
 			case 'login':
				if(!isset($this->username ) || !isset($this->email )){
					throw new Exception("É necessário que seja digitado um usuario ou email para verificar",1); 	
				}  
 				if(!isset($this->senha ) ){
 					throw new Exception("É necessário que o usuario possua uma senha", 1); 	
 				}
 				break;
 			
 			case 'get': 
 			case 'delete':
 				$this->veriricaId();
 				break;
 		}
 	}
	public function veriricaId(){
		if(!isset($this->id )){
			throw new Exception("Houve um erro ao resgatar o aluno", 1); 	
		}
	} 

 	 public function saveUsuario()
 	{ 
 
 		$this->verifyAttr('save');
 		$this->banco->query("INSERT INTO challenge.usuarios ( nome, username, email, senha)
						VALUES ( :NOME , :USERNAME , :EMAIL , :SENHA );",
						[ 
							':NOME' => $this->nome,
							':USERNAME' => $this->username,
							':EMAIL' => $this->email,
							':SENHA' => $this->senha
						]
					);
  		return $this->id;
 	}

 	public function editUsuario()
 	{ 
 		$this->verifyAttr('edit');
 		
 	} 
 	
 	public function deletarUsuario()
 	{ 
 		$this->verifyAttr('delete');
 		
 	}

 	public function getUsuario()
 	{ 
 		$this->verifyAttr('get');
 		return   $this->banco->query("SELECT * FROM challenge.usuarios 
 							WHERE id = :ID;" ,
						[  
							':ID' => $this->id
						] 
					); 
 		
 	}

 	public function getListUsuario()
 	{ 
 		return [
		$this->id,
		$this->nome,  
		$this->username,
		$this->email,
		$this->senha
 		];
 	}

 	public function login( )
 	{ 
 
 		// echo '11111';
 		$this->verifyAttr('login'); 
 		return $this->banco->query("SELECT * FROM challenge.usuarios 
 							WHERE email = :EMAIL or username = :USERNAME 
 							AND senha = :SENHA;" ,
						[  
							':USERNAME' => $this->username,
							':EMAIL' => $this->email,
							':SENHA' => $this->senha
						] 
					); 

 	}
}
