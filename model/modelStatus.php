<?php

class modelStatus{


    public function listarStatus(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_status");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarStatus($id_status, $descricao_status){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_status (id_status, descricao) VALUES :id_status, :descricao");

            $cadastrar->bindParam(':id_status', $id_status);
            $cadastrar->bindParam(':descricao', $descricao_status);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarStatus($descricao_status){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_status SET descricao = :descricao WHERE id_status = :id_status");

            $atualizar->bindParam(":id_status", $id_status);
            $atualizar->bindParam(":descricao", $descricao_status);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>