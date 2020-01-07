<?php
require("utilidades.php");

$conexao= conecta();

$usario_autenticado = false;

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$query = 'SELECT cpf,senha FROM funcionarios';

$banco_usuarios = mysqli_query($conexao, $query);
/* aqui deu erro, nao ta puxando os dados para a variavel 
echo "<pre>";
print_r($banco_usuarios) ;
echo "</pre>";
*/
$listacpf = mysqli_fetch_assoc($banco_usuarios);
$arraycpf = [$listacpf];
while ($listacpf !== null) {
	$listadata = mysqli_fetch_assoc($banco_usuarios);
	if($listacpf !== null){
		$arraycpf[] = $listacpf;
	}

echo "<pre>";
print_r($arraycpf);
echo "</pre>";


foreach ($banco_usuarios as $user) {

		if ($user['cpf']==$cpf && $user['senha']==$senha){
			$usario_autenticado = true;

		}
	}

if ($usario_autenticado = true) {
	echo "usuario autenticado";
	 
}
else {
	echo "senha ou usario errado! tente novamente";
	
};
