<?php
namespace classes;

class Usuarios{
	private $id;
	private $nome;  
	private $username;
	private $email;
	private $senha;


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
 				veriricaId();
 			case 'save':  
 				if(!empty($this->getNome())){
 					throw new Exception("É necessário que o usuario possua um nome", 1); 	
 				}
 				if(!empty($this->getUserName())){
 					throw new Exception("É necessário que o usuario possua um username", 1); 	
 				}
 				if(!empty($this->getEmail()){
 					throw new Exception("É necessário que o usuario possua um email", 1); 	
 				}
 				if(!empty($this->getSenha()){
 					throw new Exception("É necessário que o usuario possua uma senha", 1); 	
 				}
 				break;
 			
 			case 'get': 
 			case 'delete':
 				veriricaId();
 				break;
 		}
 		function veriricaId(){
			if(!empty($this->getId())){
				throw new Exception("Houve um erro ao resgatar o aluno", 1); 	
			}
 		}
 	}

 	 public function saveUsuario()
 	{ 
 		$this->verifyAttr('save');
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
 		return [
		$this->id,
		$this->nome,  
		$this->username,
		$this->email,
		$this->senha
 		];
 		
 	}

 	public function getListUsuario()
 	{ 
 		
 	}
}