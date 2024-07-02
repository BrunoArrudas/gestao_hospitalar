<?php

class controllerProntuario{

    public function listarProntuario(){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->listarProntuario();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarProntuario($prontuario){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->cadastrarProntuario($prontuario);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarProntuario($prontuario){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->atualizarProntuario($prontuario);
        }catch(PDOException $e){
            return false;
        }
    }
}