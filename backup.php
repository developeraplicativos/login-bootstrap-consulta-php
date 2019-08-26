<?php

namespace prova;

require_once('Config.php');

use controll\ControllAlunos;

$ctlAluno =  new ControllAlunos;
$ctlAluno->setAttrAluno( $nome = 'Emerson Rodrigues', $dataNascimento = date('Y-m-d', strtotime('20-04-1983')), $id = 1 );
var_dump( $ctlAluno->getAluno() );

/*
Login de autenticação:
 - Username ou E-mail;
 - Senha;


Cadastro, Alteração, Remoção e Detalhamento de:
 - Alunos;
 - Usuários;
Os alunos irão possuir: id, nome, data de nascimento;
Os usuários irão possuir: id, nome, username, e-mail, senha;+


PONTOS EXTRAS
 - Criação de API para o back-end; 
 - Utilização de FrameWork Javascript para o front-end;
 - Arquitetura de Camadas;
 - Testes unitários;


 RECOMENDAÇÕES
 - Usar o [Slim Framework] para desenvolvimento da API back-end (https://www.slimframework.com/);
 - Usar AngularJS para desenvolvimento do front-end;
 - Escreva um README no seu projeto descrevendo as tecnologias usadas e por que foram escolhidas;
 - Escreve um README no seu projeto descrevendo como rodar o seu projeto;*/