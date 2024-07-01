<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerConsultas");
include_once ("model/modelConsultas.php");

$data = json_decode(file_get_contents('php://input'), true);

$detalhes_consulta = $data["detalhes"];

$controllerConsulta = new controllerConsulta();
$resultado = $controllerConsulta->cadastrarConsultas($detalhes_consulta);

if($resultado) echo "Consulta cadastrada com sucesso";


?>