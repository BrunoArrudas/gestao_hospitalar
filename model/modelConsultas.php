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

    public function cadastrarConsultas($id_consulta, $id_prontuario ,$id_funcionario, $detalhes_consulta){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_consultas (id_consulta, id_prontuario, id_funcionario, detalhes) VALUES :id_consulta, :id_prontuario, :id_funcionario, :detalhes");
            
            $cadastrar->bindParam(':id_consulta', $id_consulta);
            $cadastrar->bindParam(':id_prontuario', $id_prontuario);
            $cadastrar->bindParam(':id_funcionario', $id_funcionario);
            $cadastrar->bindParam(':detalhes', $detalhes_consulta);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarConsultas($id_consulta, $id_funcionario, $id_prontuario, $detalhes_consulta){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_consultas SET id_consulta = :id_consulta, detalhes = :detalhes WHERE id_consulta = :id_consulta");
            
            $atualizar->bindParam(":id_consulta", $id_consulta);
            $atualizar->bindParam(":detalhes", $detalhes_consulta);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>