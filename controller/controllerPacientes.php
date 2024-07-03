<?php 


class controllerPacientes{
    public function listarPacientes(){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->listarPacientes();
        } catch(PDOException $e){
            return false;
        }

    }

    public function cadastrarPaciente($id_paciente, $id_prontuario, $id_status, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->cadastrarPaciente($id_paciente,$id_prontuario,$id_status,$nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
        }catch(PDOException $e) {
            return false;
        }
    }

    public function atualizarPaciente($id_paciente, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $modelPacientes = new modelPacientes();
            return $modelPacientes->atualizarPaciente($id_paciente, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf);
        } catch(PDOException $e){
            return false;
        }
    }
}