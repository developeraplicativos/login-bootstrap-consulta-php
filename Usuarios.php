<?php
namespace prova;

require_once('Config.php');

use \controll\controllUsuarios;
use Exception;

try{
	$ctrlUser = new controllUsuarios;
  if(isset($_GET['id'])){
    $result = $ctrlUser->getUsuario($_GET['id']);
  }else{
    header('LOCATION: index.php');
  }
}catch(Exception $e){
	echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<div class="container">
  <h2>Lista de Usuários</h2>             
  <table class="table table-hover">
    <thead>
      <tr>
        <th> id </th> 
        <th> username </th> 
        <th> ações </th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $result['id'] ?></td>
        <td><?= $result['username'] ?></td>
        <td><i class="fa fa-eye p-2 pointer hover-verde"></i><i class="fa fa-edit p-2 pointer hover-azul"></i><i class="fa fa-trash-alt p-2 pointer hover-red"></i></td>
      </tr> 
    </tbody>
  </table>
</div>

</body>
</html>
