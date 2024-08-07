<?php

class modelFuncionarios{

    public function listarFuncionarios(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_funcionarios");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }catch(PDOException $e){

        }
    }

    public function cadastrarFuncionarios($id_funcionario, $id_cargo, $id_status, $nome_funcionario, $sobrenome_funcionario){
        try{
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_funcionarios(id_funcionario, id_cargo, id_status, nome,sobrenome)VALUES(:id_cargo, :id_funcionario ,:id_status,:nome, :sobrenome)");

            $inserir->bindParam(':id_funcionario', $id_funcionario);
            $inserir->bindParam(':id_cargo', $id_cargo);
            $inserir->bindParam(':id_status', $id_status);
            $inserir->bindParam(':nome', $nome_funcionario);
            $inserir->bindParam(':sobrenome',$sobrenome_funcionario);
            $inserir->execute();

            return true;

        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarFuncionarios($id_funcionario, $nome_funcionario, $sobrenome_funcionario){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_funcionarios SET nome_funcionario = :nome , sobrenome_funcionario = :sobrenome WHERE id_funcionario = :id_funcionario");
            
            $atualizar->bindParam(":id_funcionario", $id_funcionario);
            $atualizar->bindParam(":nome", $nome_funcionario);
            $atualizar->bindParam(":sobrenome", $sobrenome_funcionario);
            $atualizar->execute();

            return true;
        } catch(PDOException $e){
            return false;
        }
    }
}

?>