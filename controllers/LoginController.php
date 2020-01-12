<?php

$cpf = $_GET['cpf'];
$senha = $_GET['senha'];

$usario_autenticado = false;

$usuariocpf = bunscaUsarioPorCpf($cpf);

if ($usuariocpf['senha'] == $senha) {
  $usario_autenticado = true;
}

$resposta = [];

if ($usario_autenticado === true) {
  $resposta["mensagem"] = "usuario autenticado";
  $resposta["nome"] = $usuariocpf['nome'];
  $resposta["id"] = $usuariocpf['id'];
} else {
  $resposta["mensagem"] = "senha ou usario errado! tente novamente";
}

echo json_encode($resposta);