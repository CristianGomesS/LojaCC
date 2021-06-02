<?php
require "Model/M-Cliente.php";

class ControleListarCliente{
    public static function processaRequisicao() {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Cliente"); //lojacc.Cliente
        
                
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
            return array();
       }
    }
}

?>