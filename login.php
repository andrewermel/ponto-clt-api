<?php
require("utilidades.php");

$conexao = conecta();

$usario_autenticado = false;

$cpf = $_GET['cpf'];
$senha = $_GET['senha'];
$query = "SELECT cpf,senha, nome, id FROM funcionarios WHERE cpf = '$cpf'";

$banco_usuarios = mysqli_query($conexao, $query);

$usuariocpf = mysqli_fetch_assoc($banco_usuarios);

if($usuariocpf['senha'] == $senha){
  $usario_autenticado = true;
}

$resposta = [];

if ($usario_autenticado === true) {
  $resposta["mensagem"] = "usuario autenticado";
  $resposta["nome"] = utf8_encode($usuariocpf['nome']);
  $resposta["id"] = $usuariocpf['id'];
}
else {
  $resposta["mensagem"] = "senha ou usario errado! tente novamente";
}


echo json_encode($resposta);