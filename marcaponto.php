<?php
// coleta variaveis
$data=date("Y-m-d H:i:s");
$funcionario_id = $_GET["funcionario_id"];
$type=$_GET["type"];

// dados de conexao
$maquina = "us-cdbr-iron-east-05.cleardb.net";
$usuario="b802b54a90da1a";
$senha="c5c243fe";
$database="heroku_78f23a4efb62922";
$conexao= mysqli_connect($maquina,$usuario,$senha,$database);

// Executa query no banco
mysqli_query($conexao,"INSERT into ponto (data,funcionario_id,type) values ('$data','$funcionario_id', '$type')");