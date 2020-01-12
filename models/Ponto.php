<?php

function buscaPontosPorDataEFuncionarioId($data, $funcionario_id) {
  $guardadata = query("SELECT data,type FROM ponto WHERE DATE(data) = '$data' and funcionario_id = $funcionario_id");
  return fetchTodos($guardadata);
}


function marcaPonto($data, $funcionario_id, $type){
  return query("INSERT into ponto (data,funcionario_id,type) values ('$data','$funcionario_id', '$type')");
}