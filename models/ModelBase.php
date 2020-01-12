<?php

function query($text){
  $conexao = conecta();
  return mysqli_query($conexao, $text);
}

function fetchTodos($conexao){
  $linha = mysqli_fetch_assoc($conexao);
  $lista = [];
  while ($linha !== null) {
    $lista[] = $linha;
    $linha = mysqli_fetch_assoc($conexao);
  }
  return $lista;
}