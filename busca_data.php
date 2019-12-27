<?php

if(isset($_GET["buscardata"]) && $_GET["buscardata"] != null){
	$buscardata = $_GET["buscardata"];
}
else {
	$buscardata=date("Y-m-d");
}

$funcionario_id = $_GET["funcionario_id"];

$maquina = "us-cdbr-iron-east-05.cleardb.net";
$usuario="b802b54a90da1a";
$senha="c5c243fe";
$database="heroku_78f23a4efb62922";
$conexao= mysqli_connect($maquina,$usuario,$senha,$database);


$guardadata = mysqli_query($conexao, "SELECT data,type FROM ponto where DATE(data) = '$buscardata'and $funcionario_id = funcionario_id");

$listadata = mysqli_fetch_assoc($guardadata);
$arraydata = [$listadata];
while ($listadata !== null) {
	$listadata = mysqli_fetch_assoc($guardadata);
	if($listadata !== null){
		$arraydata[] = $listadata;
	}
	
	
	}
echo json_encode($arraydata);

/*
echo "<pre>";
print_r ($arraydata);
echo "</pre>";
*/

