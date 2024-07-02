<?php

class controllerExames{

    public function listarExames(){
        try{
            $modelExames = new modelExames();
            return $modelExames->listarExames();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarExames($exames){
        try{
            $modelExames = new modelExames();
            return $modelExames->cadastrarExames($exames);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarExames($exames){
        try{
            $modelExames = new modelExames();
            return $modelExames->atualizarExames($exames);
        }catch(PDOException $e){
            return false;
        }
    }
}