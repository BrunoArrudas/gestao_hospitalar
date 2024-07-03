<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerExames.php");
include_once ("model/modelExames.php");

$data = json_decode(file_get_contents('php://input'), true);

$exames = $data["data_solicitacao"];

$controllerExames = new controllerExames();
$resultado = $controllerExames->cadastrarExames($id_exames, $id_funcionario, $id_procedimentos, $id_prontuarios,$exames);

if($resultado) echo "Exame cadastrado com sucesso";


?>