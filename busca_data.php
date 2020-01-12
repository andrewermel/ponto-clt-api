<?php
require("utilidades.php");
if(isset($_GET["buscardata"]) && $_GET["buscardata"] != null){
	$buscardata = $_GET["buscardata"];
}
else {
	$buscardata=date("Y-m-d");
}

$funcionario_id = $_GET["funcionario_id"];

$conexao= conecta();

$guardadata = mysqli_query($conexao, "SELECT data,type FROM ponto where DATE(data) = '$buscardata' and $funcionario_id = funcionario_id");

$listadata = mysqli_fetch_assoc($guardadata);
$arraydata = [$listadata];
while ($listadata !== null) {
	$listadata = mysqli_fetch_assoc($guardadata);
	if($listadata !== null){
		$arraydata[] = $listadata;
	}
	
	
	}
echo json_encode($arraydata);