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

    public function cadastrarProntuario($id_prontuario, $prontuario){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->cadastrarProntuario($id_prontuario, $prontuario);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarProntuario($id_prontuario, $prontuario){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->atualizarProntuario($id_prontuario, $prontuario);
        }catch(PDOException $e){
            return false;
        }
    }
}