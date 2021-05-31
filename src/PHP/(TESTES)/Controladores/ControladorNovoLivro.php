<?php
require "Modelos/Produto.php";
class ControladorNovoProduto{
   private $Produto;

   public function __construct(){
      $this->Produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->$Produto->setCodigo($linha['ID_Produto']);
      $this->$Produto->setNome($linha['Nome']);
      $this->$Produto->setPreco($linha['Preco']);
      $this->$Produto->setEstoque($linha['Estoque']);
      $this->$Produto->setCategoria($linha['Categoria_CategoriaID']);
      
      $this->Produto->incluirProduto();
 
      header('Location:ListarLivro.php', true,302);
   }
}
   
   
?>