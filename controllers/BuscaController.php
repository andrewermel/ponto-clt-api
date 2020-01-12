<?php
if(isset($_GET["buscardata"]) && $_GET["buscardata"] != null){
	$buscardata = $_GET["buscardata"];
}
else {
	$buscardata=date("Y-m-d");
}

$funcionario_id = $_GET["funcionario_id"];

$resposta = buscaPontosPorDataEFuncionarioId($buscardata, $funcionario_id);

echo json_encode($resposta);