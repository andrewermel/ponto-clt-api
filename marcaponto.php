<?php

function insereNoBanco($query){
    // Para rodar com banco local:
    $mysqli = mysqli_connect("us-cdbr-iron-east-05.cleardb.net", "b802b54a90da1a", "c5c243fe", "heroku_78f23a4efb62922"); // Comente essa linha
//  $mysqli = mysqli_connect("localhost", "teu_usuario", "tua_senha", "teu_banco"); // Descomente essa linha e coloque os dados certos do banco local
    mysqli_query($mysqli, $query);
}

function marcaPonto(){
    $data = date("Y-m-d H:i:s");
    $funcionario_id = $_GET['funcionario_id'];
    $type = $_GET['type'];
    insereNoBanco("INSERT INTO ponto (data, funcionario_id, type) VALUES ('$data', $funcionario_id, '$type');");
}

marcaPonto();