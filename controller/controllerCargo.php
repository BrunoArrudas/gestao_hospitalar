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

    public function cadastrarCargo($id_cargo, $cargo){
        try{
            $modelCargo = new modelCargo();
            return $modelCargo->cadastrarCargo($id_cargo, $cargo);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarCargo($id_cargo, $cargo){
        try{
            $modelCargo = new modelCargo();
            return $modelCargo->atualizarCargo($id_cargo, $cargo);
        }catch(PDOException $e){
            return false;
        }
    }
}