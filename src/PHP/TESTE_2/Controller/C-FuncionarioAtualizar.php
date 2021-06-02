<?php
require "Model/M-Funcionario.php";

class ControleAtualizarFuncionario{
    public function processaRequisicao() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Funcionario
                set 
                    Nome=:nome, 
                    Mercado_CNPJ=:cnpj,
                    Senha=:senha
                where IDfuncionario=:id";
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":id",$id);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Funcionario Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
}

?>