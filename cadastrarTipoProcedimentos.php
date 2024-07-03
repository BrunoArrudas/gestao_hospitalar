<?php

include_once ("services/conexaoBanco.php");
include_once ("controller/controllerTipoProcedimentos.php");
include_once ("model/modelTipoProcedimentos.php");

$data = json_decode(file_get_contents('php://input'), true);

$tipo_procedimento = $data["descricao_procedimento"];

$controllerTipoProcedimento = new controllerTipoProcedimento();
$resultado = $controllerTipoProcedimento->cadastrarTipoProcedimento($id_tipo_procedimento, $tipo_procedimento);

if($resultado) echo "Procedimento cadastrado com sucesso";


?>