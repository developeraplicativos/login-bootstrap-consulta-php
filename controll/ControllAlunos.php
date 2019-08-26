<?php
namespace controll;
 
use classes\Alunos;

class ControllAlunos{
	private $aluno;

	public function __construct()
	{
		$this->aluno = new Alunos; 
	}

	public function creatAluno( $nome, $dataNascimento, $id)
	{
		$this->aluno->setAttrAluno($nome, $dataNascimento, $id  );
		return $this->aluno->saveAluno();
	}

	public function editAluno($id,$nome, $dataNascimento )
	{
		return $this->aluno->setAttrAluno($id,$nome, $dataNascimento );
		
	}
	
	public function delAluno()
	{
		$this->aluno->setId( $id );
		return $this->aluno->deletar( );
		
	}
	
	public function getAluno( $id )
	{
		$this->aluno->setId( $id ); 
		return $this->aluno->getAluno();
		
	}
	
	public function getAllAlunos()
	{ 
		return $this->aluno->getListAluno( );
	}
}