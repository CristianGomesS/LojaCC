<?php
 require 'ProdutoDAO.php';
 class Produto{
    private $Categoria_CategoriaID;
    private $IDProduto;
    private $Nome;
    private $Preco;
    private $Estoque;

    public function getCategoria(){
        return $this->Categoria_CategoriaID;
    }
    public function getCodigo(){
        return $this->IDProduto;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getPreco(){
        return $this->Preco;
    }
    public function getEstoque(){
        return $this->Estoque;
    }

    public function setCategoria($Categoria_CategoriaID){
        $this->Categoria_CategoriaID = $Categoria_CategoriaID;
    }
    public function setCodigo($IDProduto){
        $this->Codigo = $IDProduto;
    }
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function setAno($Preco){
        $this->Preco = $Preco;
    }
    public function setEstoque($Estoque){
        $this->Estoque = $Estoque;
    }
    
    public function incluirProduto(){
         $ProdutoDAO = new ProdutoDAO();
         $ProdutoDAO->incluirProduto($this);
    }
    public function listarTodos(){
        $ProdutoDAO = new ProdutoDAO();
        return $ProdutoDAO->listarTodos();
    }
 }
?>