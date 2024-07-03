<?php

class controllerTipoProcedimento{

    public function listarTipoProcedimento(){
        try{
            $modelTipoProcedimento = new modelTipoProcedimentos();
            return $modelTipoProcedimento->listarTipoProcedimento();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarTipoProcedimento($id_tipo_procedimento, $tipo_procedimento){
        try{
            $modelTipoProcedimento = new modelTipoProcedimentos();
            return $modelTipoProcedimento->cadastrarTipoProcedimento($id_tipo_procedimento, $tipo_procedimento);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarTipoProcedimento($tipo_procedimento){
        try{
            $modelTipoProcedimento = new modelTipoProcedimentos();
            return $modelTipoProcedimento->atualizarTipoProcedimento($tipo_procedimento);
        }catch(PDOException $e){
            return false;
        }
    }
}