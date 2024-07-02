<?php

class modelCargo{


    public function listarCargo(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_cargos");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    public function cadastrarCargo($cargo){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->query("INSERT INTO tbl_cargos (descricao_cargo) VALUES :descricao_cargo");

            $cadastrar->bindParam(':descricao_cargo', $cargo);
            $cadastrar->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualizarCargo($cargo){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_cargos SET descricao_cargo = :descricao_cargo WHERE id_cargo = :id_cargo");

            $atualizar->bindParam(":descricao_cargo", $cargo);
            $atualizar->execute();

            return true;

        }catch (PDOException $e){
            return false;
        }
    }

}

?>