<?php
require "Model/M-Produto.php";

class ControladorProdutoListar{
    public static function processaRequisicao(){
            try {
                $minhaConexao = Conexao::getConexao();
                $sql = $minhaConexao->prepare("select * from Produto"); //lojacc.Funcionario
            
                    
                $sql->execute();
                $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
                
                $listaProduto=array();
                $i=0;

                while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto(
                    $linha['Nome'],  
                    $linha['Preco'],
                    $linha['Estoque'],
                    $linha['TotalDeVendas'],
                    $linha['Categoria_CategoriaID'],
                    $linha['IDproduto']
                );
                $listaProduto[$i] = $produto;
                ++$i;
                }
                return $listaProduto;
            }
            catch(PDOException $e){
                return array();
        }
     }
}
?>