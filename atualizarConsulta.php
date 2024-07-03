<?php

include_once("services/conexao.php");
include_once("controller/controllerConsultas.php");
include_once("model/modelConsultas.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_consulta = $data["id_consulta"];
$detalhes_consulta = $data["detalhes_consulta"];

$controllerConsulta = new controllerConsulta();
$resultado = $controllerConsulta->atualizarConsultas($id_consulta, $detalhes_consulta);

if($resultado){
    $msg = array("msg" => "Atualização da consulta realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar a consulta!");
    echo json_encode($msg);
}

?>