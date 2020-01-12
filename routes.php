<?php


if($url === '/funcionarios'){
  require('controllers/FuncionariosController.php');
}
else if($url === '/busca_data'){
  require('controllers/BuscaController.php');
}
else if($url === '/login'){
  require('controllers/LoginController.php');
}
else if($url === '/marcaponto'){
  require('controllers/PontoController.php');
}