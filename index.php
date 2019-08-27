<?php
namespace prova;

require_once('Config.php');

use controll\ControllUsuarios;

// $ctrlUser = new ControllUsuarios;
// // $result = $ctrlUser->creatUsuario( 'pedro49',  'pedro49',  'predo49@gmail.com',  '01234' );
// var_dump($result);

/*use controll\ControllAlunos;

$ctlAluno =  new ControllAlunos;
$ctlAluno->creatAluno( 'Emerson Rodrigues', date("Y-m-d", strtotime("2011-01-07")) ,  1 );
var_dump( $ctlAluno->getAluno(1) );
var_dump( $ctlAluno->getAllAlunos() );
*/
if(isset($_POST['login-button'])){
	$ctrlUser = new ControllUsuarios;  
	if($ctrlUser->login( $_POST['login'], $_POST['password'] ) ){
		header('LOCATION: logado.php');
	}else{
		echo '
			<script type="text/javascript">
				alert("erro ao conectar, tente novamente");
			</script> 
		';
	};
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Desafio de estagio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">
 
	    <form method="POST">
	      <input type="text" id="login" class="fadeIn second mt-5" name="login" placeholder="login">
	      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
	      <input type="submit" class="fadeIn fourth" value="Log In" name="login-button">
	    </form>
 
	    <div id="formFooter">
	      <a class="underlineHover" href="#">Esqueceu a senha?</a>
	    </div>

	  </div>
	</div>


	<div class="container">
		<h1>DESAFIO</h1>
		<p>
		<h2>Login de autenticação:</h2>
		 - Username ou E-mail;<br>
		 - Senha;<p>

		<p>
		<h2>Cadastro, Alteração, Remoção e Detalhamento de:</h2>
		 - Alunos;<br>
		 - Usuários;<br>
		Os alunos irão possuir: id, nome, data de nascimento;<br>
		Os usuários irão possuir: id, nome, username, e-mail, senha;+<p>

		<p>
		<h2>PONTOS EXTRAS</h2>
		 - Criação de API para o back-end; <br>
		 - Utilização de FrameWork Javascript para o front-end;<br>
		 - Arquitetura de Camadas;<br>
		 - Testes unitários;<p>

		<p>
		 <h2>RECOMENDAÇÕES</h2>
		 - Usar o [Slim Framework] para desenvolvimento da API back-end (https://www.slimframework.com/);<br>
		 - Usar AngularJS para desenvolvimento do front-end;<br>
		 - Escreva um README no seu projeto descrevendo as tecnologias usadas e por que foram escolhidas;<br>
		 - Escreve um README no seu projeto descrevendo como rodar o seu projeto;*</p>
	</div>
</body>
</html>