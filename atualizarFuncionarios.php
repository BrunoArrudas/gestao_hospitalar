<?php

include_once("services/conexao.php");
include_once("controller/controllerFuncionarios.php");
include_once("model/modelFuncionarios.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_funcionario = $data["id_funcionario"];
$nome_funcionario = $data["nome_funcionario"];
$sobrenome_funcionario = $data["sobrenome_funcionario"];

$controllerFuncionarios = new controllerFuncionarios();
$resultado = $controllerFuncionarios->atualizarFuncionarios($id_funcionario, $nome_funcionario, $sobrenome_funcionario);

if($resultado){
    $msg = array("msg" => "Atualização de funcionarios realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o funcionario!");
    echo json_encode($msg);
}

?>