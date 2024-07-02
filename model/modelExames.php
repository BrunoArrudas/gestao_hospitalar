<?php

class modelExames{


    public function listarExames(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_exames");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarExames($exames){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_exames (data_solicitacao) VALUES :data_solicitacao");

            $cadastrar->bindParam(':data_solicitacao', $exames);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarExames($exames){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_exames SET data_solicitacao = :data_solicitacao WHERE id_exame = :id_exame");

            $atualizar->bindParam(":data_solicitacao", $exames);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>