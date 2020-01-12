<?php
require("models/Ponto.php");

$data = date("Y-m-d H:i:s");
$funcionario_id = $_GET["funcionario_id"];
$type=$_GET["type"];

marcaPonto($data, $funcionario_id, $type);