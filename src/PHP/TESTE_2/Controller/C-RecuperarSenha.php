<?php
require "Model/M-Cliente.php";

class ControleRecuperarNomeSenha{
    //retorna array de pessoas com nome e senha
    public static function processaRequisicao($nome, $senha) { //util para login
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Cliente where Nome=:nome and Senha=:senha"); //lojacc.Cliente
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":senha",$senha);

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaClientes=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cliente = new Cliente(
                $linha['Nome'], 
                $linha['CPF'], 
                $linha['Senha'], 
                $linha['Mercado_CNPJ'],
                $linha['Cartao'], 
                $linha['DataDeIngresso']
            );
            $listaClientes[$i] = $cliente;
            ++$i;
            }
            return $listaClientes;
        }
        catch(PDOException $e){
            //Todo mensagem de erro aqui
            return array();
       }
    }
}
?>