<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerStatus.php");
include_once ("model/modelStatus.php");

$data = json_decode(file_get_contents('php://input'), true);

$id_status = $data["id_status"];
$descricao_status = $data["descricao"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->cadastrarStatus($id_status,$descricao_status);

if($resultado) echo "Status cadastrado com sucesso";


?>