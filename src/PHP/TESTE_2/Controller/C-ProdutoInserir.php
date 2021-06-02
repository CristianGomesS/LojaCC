<?php
require "Model/M-Produto.php";

class ControleNovoProduto{
    try{
        $minhaConexao = Conexao::getConexao();
        $sql = $minhaConexao->prepare(
            "insert into Produto (Nome, Preco, Estoque, TotalDeVendas, Categoria_CategoriaID) 
            values (:nome,:preco,:estoque,:totalDeVendas,:idCategoria)"
        );
        $sql->bindParam(":nome",$nome);
        $sql->bindParam(":preco",$preco);
        $sql->bindParam(":estoque",$estoque);
        $sql->bindParam(":totalDeVendas",$totalDeVendas);
        $sql->bindParam(":idCategoria",$idCategoria);
        $sql->execute();
        return true;
    }
    catch(PDOException $e) {
        echo "Produto Inserir Exception: ".$e->getmessage();
        return false;
    }
  }

?>