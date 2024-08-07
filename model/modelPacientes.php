<?php 

class modelPacientes{

    public function listarPacientes(){
        try{
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_pacientes");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e){

        }
    }

    
    public function cadastrarPaciente($id_paciente, $id_prontuario, $id_status, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("INSERT INTO tbl_pacientes(id_prontuario, id_paciente, id_status, nome, sobrenome, email, cep, logradouro, numero, bairro, cidade, uf) VALUES(
                                       :nome, :sobrenome, :email, :cep, :logradouro, :numero, :bairro, :cidade, :uf ) ");

            $cadastrar->bindParam(':id_prontuario', $id_prontuario);
            $cadastrar->bindParam(':id_paciente', $id_paciente);
            $cadastrar->bindParam(':id_status', $id_status);
            $cadastrar->bindParam(':nome', $nome_paciente);
            $cadastrar->bindParam(':sobrenome', $sobrenome_paciente);
            $cadastrar->bindParam(':email', $email);
            $cadastrar->bindParam(':cep', $cep);
            $cadastrar->bindParam(':logradouro', $logradouro);
            $cadastrar->bindParam(':numero', $numero);
            $cadastrar->bindParam(':bairro', $bairro);
            $cadastrar->bindParam(':cidade', $cidade);
            $cadastrar->bindParam(':uf', $uf);
            $cadastrar->execute();

            return true;
        } catch (PDOException $e){    
            return false;
        }
    }

    public function atualizarPaciente($id_paciente, $nome_paciente, $sobrenome_paciente, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf){
        try{
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE tbl_pacientes SET nome = :nome, sobrenome = :sobrenome, email = :email, cep = :cep, logradouro = :logradouro, 
                                       numero = :numero, bairro = :bairro, cidade = :cidade, uf = :uf WHERE id_paciente = :id_paciente");

            $atualizar->bindParam(":id_paciente", $id_paciente);
            $atualizar->bindParam(":nome", $nome_paciente);
            $atualizar->bindParam(":sobrenome", $sobrenome_paciente);
            $atualizar->bindParam(":email", $email);
            $atualizar->bindParam(":cep", $cep);
            $atualizar->bindParam(":logradouro", $logradouro);
            $atualizar->bindParam(":numero", $numero);
            $atualizar->bindParam(":bairro", $bairro);
            $atualizar->bindParam(":cidade", $cidade);
            $atualizar->bindParam(":uf", $uf);
            $atualizar->execute();

            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}

?>