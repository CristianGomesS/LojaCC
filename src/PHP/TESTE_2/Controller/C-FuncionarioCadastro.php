<?php
require "Model/M-Funcionario.php";

Class ControleCadastrarFuncionario{
    public function processaRequisicao() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "insert into Funcionario (Nome, Mercado_CNPJ, Senha) 
                values (:nome,:cnpj, :senha)"
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Funcionario Inserir Exception: ".$e->getmessage();
            return false;
        }
    }
}
?>