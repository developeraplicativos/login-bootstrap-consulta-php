<?php
namespace classes;

use \Exception;

class Alunos{
	private $id;
	private $nome;  
	private $dataNascimento;

	public function setAttrAluno(String $nome, string $dataNascimento, int $id = null)
	{
		$this->id = $id;
		$this->nome = $nome;  
		$this->dataNascimento = $dataNascimento;
		var_dump( $nome, $dataNascimento, $id);

	}
 	
 	public function getId(){  
 		return $this->id;
 	}

 	public function setId(int $id){
 		$this->id = $id;
 	}
 	
 	public function getDataNascimento(){
 		return $this->dataNascimento;
 	}

 	public function setDataNascimento(String $dataNascimento){
 		$this->dataNascimento = $dataNascimento;
 	}
 	
 	public function getNome(){
 		return $this->nome;
 	}

 	public function setNome(String $nome){
 		$this->nome = $nome;
 	}

 	public function verifyAttr($tipo)
 	{
 		switch ($tipo) {
 			case 'edit': 
 				$this->veriricaId();
 			case 'save': 
 				if(empty( $this->nome )){
 					throw new Exception("É necessário que o aluno possua um nome", 1); 	
 				}
 				if(empty($this->dataNascimento ) ){
 					throw new Exception("É necessário que o aluno possua uma data de nascimento", 1); 	
 				}
 				break;
 			
 			case 'get': 
 			case 'delete':
 				$this->veriricaId();
 				break;
 		}

 	}
	public function veriricaId(){
		if(empty($this->id ) ){
			throw new Exception("Houve um erro ao resgatar o aluno", 1); 	
		}
	}

 	public function saveAluno()
 	{ 
 		$this->verifyAttr('save');
 		return $this->id;
 		
 	}

 	public function editAluno()
 	{ 
 		$this->verifyAttr('edit');
 		return $this->id;
 		
 	} 
 	
 	public function deletarAluno()
 	{ 
 		$this->verifyAttr('delete');
 		return $this->id;
 		
 	}

 	public function getAluno()
 	{ 
 		$this->verifyAttr('get');
 		return [
			$this->id,
			$this->nome,  
			$this->dataNascimento
 		];
 		
 	}

 	public function getListAluno()
 	{ 

 		return [
			$this->id,
			$this->nome,  
			$this->dataNascimento
 		];
 	}


 	
}