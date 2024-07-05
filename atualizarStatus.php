<?php

include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_status = $data["id_status"];
$descricao_status = $data["descricao"];


$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->atualizarStatus($descricao_status);

if($resultado){
    $msg = array("msg" => "Atualização de status realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o status!");
    echo json_encode($msg);
}

?>