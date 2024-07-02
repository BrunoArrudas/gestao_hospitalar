<?php

class controllerCargo{

    public function listarCargo(){
        try{
            $modelCargo = new modelCargo();
            return $modelCargo->listarCargo();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarCargo($cargo){
        try{
            $modelCargo = new modelCargo();
            return $modelCargo->cadastrarCargo($cargo);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarCargo($cargo){
        try{
            $modelCargo = new modelCargo();
            return $modelCargo->atualizarCargo($cargo);
        }catch(PDOException $e){
            return false;
        }
    }
}