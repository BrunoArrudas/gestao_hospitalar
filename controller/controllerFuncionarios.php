<?php

class controllerFuncionarios{

    public function listarFuncionarios(){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->listarFuncionarios();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarFuncionarios($id_funcionario,$id_cargo, $id_status, $nome_funcionario, $sobrenome_funcionario){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->cadastrarFuncionarios($id_funcionario, $id_cargo, $id_status, $nome_funcionario, $sobrenome_funcionario);
        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarFuncionarios($id_funcionario, $nome_funcionario, $sobrenome_funcionario){
        try{
            $modelFuncionarios = new modelFuncionarios();
            return $modelFuncionarios->atualizarFuncionarios($id_funcionario, $nome_funcionario, $sobrenome_funcionario);
        }catch(PDOException $e){
            return false;
        }
    }
}


?>