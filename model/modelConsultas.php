<?php

class modelConsultas{


    public function listarConsultas(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_consultas");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarConsultas($detalhes_consulta){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_consultas (detalhes) VALUES :detalhes");

            $cadastrar->bindParam(':detalhes', $detalhes_consulta);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarConsultas($detalhes_consulta){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_consultas SET detalhes = :detalhes WHERE id_consulta = :id_consulta");

            $atualizar->bindParam(":detalhes", $detalhes_consulta);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>