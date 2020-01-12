<?php
require("ModelBase.php");

function bunscaUsarioPorCpf($cpf){
  $banco_usuarios = query("SELECT cpf,senha, nome, id FROM funcionarios WHERE cpf = '$cpf'");
  return mysqli_fetch_assoc($banco_usuarios);
}