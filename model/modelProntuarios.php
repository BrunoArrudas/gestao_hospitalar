<?php

class modelProntuario{


    public function listarProntuario(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_prontuarios");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarProntuario($prontuario){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_prontuarios (data_cadastro) VALUES :data_cadastro");

            $cadastrar->bindParam(':data_cadastro', $prontuario);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarProntuario($prontuario){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_prontuarios SET data_cadastro = :data_cadastro WHERE id_prontuario = :id_prontuario");

            $atualizar->bindParam(":data_cadastro", $prontuario);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>