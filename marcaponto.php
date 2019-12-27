<?php
require("utilidades.php");
// coleta variaveis
$data=date("Y-m-d H:i:s");
$funcionario_id = $_GET["funcionario_id"];
$type=$_GET["type"];

// dados de conexao
$conexao= conecta();

// Executa query no banco
mysqli_query($conexao,"INSERT into ponto (data,funcionario_id,type) values ('$data','$funcionario_id', '$type')");