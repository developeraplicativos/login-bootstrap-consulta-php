<?php
namespace classes;

class Alunos{
	private $id;
	private $nome;  
	private $dataNascimento;

	public function setAttrAluno(String $nome, Date $dataNascimento, int $id = null)
	{
		$this->id = $id;
		$this->nome = $nome;  
		$this->dataNascimento = $dataNascimento;
	}
 	
 	public function getId(){
 		return $this->id;
 	}

 	public function setId($id){
 		$this->id = $id;
 	}
 	
 	public function getDataNascimento(){
 		return $this->dataNascimento;
 	}

 	public function setDataNascimento($dataNascimento){
 		$this->dataNascimento = $dataNascimento;
 	}
 	
 	public function getNome(){
 		return $this->nome;
 	}

 	public function setNome($nome){
 		$this->nome = $nome;
 	}

 	public function verifyAttr($tipo)
 	{
 		switch ($tipo) {
 			case 'edit': 
 				veriricaId();
 			case 'save': 
 				if(!empty($this->getNome())){
 					throw new Exception("É necessário que o aluno possua um nome", 1); 	
 				}
 				if(!empty($this->getDataNascimento())){
 					throw new Exception("É necessário que o aluno possua uma data de nascimento", 1); 	
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

 	public function saveAluno()
 	{ 
 		$this->verifyAttr('save');
 	}

 	public function editAluno()
 	{ 
 		$this->verifyAttr('edit');
 		
 	} 
 	
 	public function deletarAluno()
 	{ 
 		$this->verifyAttr('delete');
 		
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
 		
 	}


 	
}