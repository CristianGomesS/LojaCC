<?php
require "Modelos/Produto.php";
class ControladorProdutoExcluir{
   private $Produto;

   public function __construct(){
      $this->Produto = new Produto();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->Produto->setCodigo($_POST['id']);
      $this->Produto->excluirProduto();
 
      header('Location:ListarLivro.php', true,302);
   }
}
   
   
?>