<?php
namespace controll;
 
use classes\Alunos;

class ControllAlunos{
	private $aluno;

	public function __construct()
	{
		$this->aluno = new Alunos;
	}

	public function creatAluno($id,$nome, $dataNascimento)
	{
		$this->aluno->setAttrAluno($id,$nome, $dataNascimento );
		$this->aluno->save();
	}

	public function editAluno($id,$nome, $dataNascimento )
	{
		$this->aluno->setAttrAluno($id,$nome, $dataNascimento );
		
	}
	
	public function delAluno()
	{
		$this->aluno->setId( $id );
		$this->aluno->deletar( );
		
	}
	
	public function getAluno($id )
	{
		$this->aluno->deletar( );
		$this->aluno->get( );
		
	}
	
	public function getAllAlunos()
	{ 
		$this->aluno->getList( );
	}
}