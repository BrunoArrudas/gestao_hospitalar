<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerProntuarios.php");
include_once ("model/modelProntuarios.php");

$data = json_decode(file_get_contents('php://input'), true);

$prontuario = $data["data_cadastro"];

$controllerProntuario = new controllerProntuario();
$resultado = $controllerProntuario->cadastrarProntuario($prontuario);

if($resultado) echo "Prontuario cadastrado com sucesso";


?>