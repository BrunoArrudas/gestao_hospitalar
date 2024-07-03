<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerConsultas.php");
include_once ("model/modelConsultas.php");

$data = json_decode(file_get_contents('php://input'), true);

$id_consulta = $data["id_consulta"];
$id_funcionario = $data["id_funcionario"];
$id_prontuario = $data["id_prontuario"];
$detalhes_consulta = $data["detalhes"];

$controllerConsulta = new controllerConsulta();
$resultado = $controllerConsulta->cadastrarConsultas($id_consulta, $id_funcionario, $id_prontuario,$detalhes_consulta);

if($resultado) echo "Consulta cadastrada com sucesso";


?>