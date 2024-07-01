<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerStatus.php");
include_once ("model/modelStatus.php");

$data = json_decode(file_get_contents('php://input'), true);

$descricao_status = $data["descricao"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->cadastrarStatus($descricao_status);

if($resultado) echo "Status cadastrado com sucesso";


?>