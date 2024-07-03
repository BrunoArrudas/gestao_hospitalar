<?php

include_once("services/conexao.php");
include_once("controller/controllerProntuarios.php");
include_once("model/modelProntuarios.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_prontuario = $data["id_prontuario"];
$prontuario = $data["prontuario"];


$controllerProntuario = new controllerProntuario();
$resultado = $controllerProntuario->atualizarProntuario($id_prontuario, $prontuario);

if($resultado){
    $msg = array("msg" => "Atualização de prontuario realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o prontuario!");
    echo json_encode($msg);
}

?>