<?php
require "Model/M-Cliente.php";

class ControleAtualizarCliente{
    public function processaRequisicao() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Cliente 
                set 
                    Nome=:nome, 
                    Cartao=:cartao, 
                    DataDeIngresso=:data, 
                    Mercado_CNPJ=:cnpj,
                    Senha=:senha 
                where CPF=:cpf";
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
            echo "Cliente Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
}
?>