<?php
require "Model/M-Funcionario.php";

class ControleListarFuncionario{
    public static function processaRequisicao() {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Funcionario"); //lojacc.Funcionario
        
                
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaFuncionario=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $funcionario = new Funcionario(
                $linha['Nome'],  
                $linha['Mercado_CNPJ'],
                $linha['Senha'],
                $linha['IDfuncionario']
            );
            $listaFuncionario[$i] = $funcionario;
            ++$i;
            }
            return $listaFuncionario;
        }
        catch(PDOException $e){
            return array();
       }
    }
}
?>