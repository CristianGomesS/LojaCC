<?php
require "Model/M-Cliente.php";

class ControleAdicionarCliente{
    public function processaRequisicao() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "insert into Cliente (Nome, CPF, Cartao, DataDeIngresso, Mercado_CNPJ, Senha) 
                values (:nome,:cpf,:cartao,:data,:cnpj,:senha)"
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":cpf",$cpf);
            $sql->bindParam(":cartao",$cartao);
            $sql->bindParam(":data",$dataDeIngresso);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Cliente Inserir Exception: ".$e->getmessage();
            return false;
        }
    }
}
?>