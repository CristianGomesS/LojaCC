<?php
require "Conexao.php";
class ProdutoDAO{

    public function listarTodos(){
        //vai ao banco de dados "lojaCC" e pega todos os itens com a "Categoria" marcada;
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from LojaCC.Produto");
        
                
           $sql->execute();
           $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
           
           $listaProd=array();
           $i=0;

           //vai preenchendo linha por linha do array, com as respectivas colunas setadas;
           while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $Produto = new Produto();
            $Produto->setCodigo($linha['ID_Produto']);
            $Produto->setNome($linha['Nome']);
            $Produto->setPreco($linha['Preco']);
            $Produto->setEstoque($linha['Estoque']);
            $Produto->setCategoria($linha['Categoria_CategoriaID']);
            $listaProd[$i] = $Produto;
            $i++;
          }
        //retorna a lista preenchida para uso:
        return $listaProd;
       }
       catch(PDOException $e){
        return array();
       }
    }

    public function incluirLivro($liv){
       try{
           //conecta ao BD para isso
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into lojaCC.produto (ID_Produto, Nome, Preco, Estoque, Categoria_CategoriaID) values (:ID_Produto, :Nome, :Preco, :Estoque, :Categoria_CategoriaID)");
           $sql->bindParam("ID_Produto",$IDProduto);
           $sql->bindParam("Nome",$Nome);
           $sql->bindParam("Preco",$Preco);
           $sql->bindParam("Estoque",$Estoque);
           $sql->bindParam("Categoria_CategoriaID",$Categoria_CategoriaID);
           $IDProduto = $liv->getCodigo();
           $Nome = $liv->getNome();
           $Preco = $liv->getPreco();
           $Estoque = $liv->getEstoque();
           $Categoria_CategoriaID = $liv->getCategoria();
           $sql->execute();
           //echo "incluido com sucesso";
           $last_id = $minhaConexao->lastInsertId();
           $liv->setCodigo($last_id);
           //echo "o numero gerado foi ",$last_id;
           return $last_id;
        }
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
    }


}

?>