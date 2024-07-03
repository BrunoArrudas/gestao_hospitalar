<?php

include_once("services/conexao.php");
include_once("controller/controllerPacientes.php");
include_once("model/modelPacientes.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_paciente = $data["id_paciente"];
$nome_paciente = $data["nome"];
$sobrenome_paciente = $data["sobrenome"];
$email = $data["email"];
$cep = $data["cep"];
$logradouro = $data["logradouro"];
$numero= $data["numero"];
$bairro = $data["numero"];
$cidade = $data["cidade"];
$uf = $data["uf"];

$controllerPacientes = new controllerPacientes();
$resultado = $controllerPacientes->atualizarPaciente($id_paciente, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf);

if($resultado){
    $msg = array("msg" => "Atualização de paciente realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o paciente!");
    echo json_encode($msg);
}

?>