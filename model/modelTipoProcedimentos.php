<?php

class modelTipoProcedimentos{


    public function listarTipoProcedimento(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_tipos_procedimento");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarTipoProcedimento($tipo_procedimento){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_tipos_procedimento (descricao_procedimento) VALUES :descricao_procedimento");

            $cadastrar->bindParam(':descricao_procedimento', $tipo_procedimento);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarTipoProcedimento($tipo_procedimento){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_tipos_procedimento SET descricao_procedimento = :descricao_procedimento WHERE id_tipos_procedimento = :id_tipos_procedimento");

            $atualizar->bindParam(":descricao_procedimento", $tipo_procedimento);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>