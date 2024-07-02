<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerCargo.php");
include_once ("model/modelCargos.php");

$data = json_decode(file_get_contents('php://input'), true);

$cargo = $data["descricao_cargo"];

$controllerCargo = new controllerCargo();
$resultado = $controllerCargo->cadastrarCargo($cargo);

if($resultado) echo "Cargo cadastrado com sucesso";


?>