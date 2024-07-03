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

    public function cadastrarExames($id_exame, $id_funcionario, $id_prontuario, $id_procedimentos, $exames){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_exames (id_exame, id_prontuario, id_funcionario, id_procedimentos, data_solicitacao) VALUES :id_exame, :id_prontuario, :id_funcionario, :id_procedimento,:data_solicitacao");

            $cadastrar->bindParam(':id_exame', $id_exame);
            $cadastrar->bindParam(':id_prontuario', $id_prontuario);
            $cadastrar->bindParam(':id_funcionario', $id_funcionario);
            $cadastrar->bindParam(':id_procedimentos', $id_procedimentos);
            $cadastrar->bindParam(':data_solicitacao', $exames);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarExames($id_exame, $exames){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_exames SET :id_exame = :id_exame, data_solicitacao = :data_solicitacao WHERE id_exame = :id_exame");
            
            $atualizar->bindParam(':id_exame', $id_exame);
            $atualizar->bindParam(":data_solicitacao", $exames);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>