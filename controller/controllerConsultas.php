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

    public function cadastrarConsultas($detalhes_consulta){
        try{
            $modelConsultas = new modelConsultas();
            return $modelConsultas->cadastrarConsultas($detalhes_consulta);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarConsultas($detalhes_consulta){
        try{
            $modelConsultas = new modelConsultas();
            return $modelConsultas->atualizarConsultas($detalhes_consulta);
        }catch(PDOException $e){
            return false;
        }
    }
}