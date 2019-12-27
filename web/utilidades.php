<?php

function conecta(){
	$maquina = "us-cdbr-iron-east-05.cleardb.net";
	$usuario="b802b54a90da1a";
	$senha="c5c243fe";
	$database="heroku_78f23a4efb62922";
	$conexao= mysqli_connect($maquina,$usuario,$senha,$database);
	return $conexao;
}