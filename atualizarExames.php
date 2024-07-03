<?php

include_once("services/conexao.php");
include_once("controller/controllerExames.php");
include_once("model/modelExames.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_exames = $data["id_exames"];
$exames = $data["exames"];

$controllerExames = new controllerExames();
$resultado = $controllerExames->atualizarExames($id_exames, $exames);

if($resultado){
    $msg = array("msg" => "Atualização de exames realizada com sucesso!");
    echo json_encode($msg);
}else{
    $msg = array("erro" => "Não foi possivel atualizar o exame!");
    echo json_encode($msg);
}

?>