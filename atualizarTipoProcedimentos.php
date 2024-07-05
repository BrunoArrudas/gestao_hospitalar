<?php

include_once("services/conexao.php");
include_once("controller/controllerTipoProcedimentos.php");
include_once("model/modelTipoProcedimentos.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_tipo_procedimento = $data["id_tipo_procedimento"];
$tipo_procedimento = $data["descricao_procedimento"];


$controllerProcedimento = new controllerTipoProcedimento();
$resultado = $controllerProcedimento->atualizarTipoProcedimento($tipo_procedimento);

if($resultado){
    $msg = array("msg" => "Atualização de tipo de procedimento realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o tipo de procedimento!");
    echo json_encode($msg);
}

?>