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

    public function cadastrarExames($id_exame,  $id_funcionario, $id_procedimentos, $id_prontuario, $exames){
        try{
            $modelExames = new modelExames();
            return $modelExames->cadastrarExames($id_exame, $id_funcionario, $id_prontuario, $id_procedimentos, $exames);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarExames($id_exame, $exames){
        try{
            $modelExames = new modelExames();
            return $modelExames->atualizarExames($id_exame ,$exames);
        }catch(PDOException $e){
            return false;
        }
    }
}