<?php
require("utilidades.php");

$conexao = conecta();

$usario_autenticado = false;

$cpf = $_GET['cpf'];
$senha = $_GET['senha'];
$query = "SELECT cpf,senha FROM funcionarios WHERE cpf = '$cpf'";

$banco_usuarios = mysqli_query($conexao, $query);

$usuariocpf = mysqli_fetch_assoc($banco_usuarios);

if($usuariocpf['senha'] == $senha){
  $usario_autenticado = true;
}

if ($usario_autenticado === true) {
  echo "usuario autenticado";
}
else {
  echo "senha ou usario errado! tente novamente";
}
