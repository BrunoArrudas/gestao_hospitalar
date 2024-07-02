<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerExames.php");
include_once ("model/modelExames.php");

$data = json_decode(file_get_contents('php://input'), true);

$exames = $data["data_solicitacao"];

$controllerExames = new controllerExames();
$resultado = $controllerExames->cadastrarExames($exames);

if($resultado) echo "Exame cadastrado com sucesso";


?>