<?php

class controllerConsulta{

    public function listarConsultas(){
        try{
            $modelConsultas = new modelConsultas();
            return $modelConsultas->listarConsultas();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarConsultas($id_consulta,$id_funcionario, $id_prontuario, $detalhes_consulta){
        try{
            $modelConsultas = new modelConsultas();
            return $modelConsultas->cadastrarConsultas($id_consulta, $id_prontuario, $id_funcionario, $detalhes_consulta);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarConsultas($id_consulta, $id_funcionario, $id_prontuario, $detalhes_consulta){
        try{
            $modelConsultas = new modelConsultas();
            return $modelConsultas->atualizarConsultas($id_consulta, $id_funcionario, $id_prontuario, $detalhes_consulta);
        }catch(PDOException $e){
            return false;
        }
    }
}