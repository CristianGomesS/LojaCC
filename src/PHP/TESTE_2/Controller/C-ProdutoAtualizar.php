<?php
require "Model/M-Produto.php";

class ControleAtualizarProduto{
    public function processaRequisicao(){
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Produto
                set 
                    Nome=:nome, 
                    Preco=:preco,
                    Estoque=:estoque,
                    TotalDeVendas=:totalDeVendas,
                    Categoria_CategoriaID=:idCategoria
                where IDproduto=:id";
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":id",$id);
            $sql->bindParam(":preco",$preco);
            $sql->bindParam(":estoque",$estoque);
            $sql->bindParam(":totalDeVendas",$totalDeVendas);
            $sql->bindParam(":idCategoria",$idCategoria);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Produto Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
}

?>