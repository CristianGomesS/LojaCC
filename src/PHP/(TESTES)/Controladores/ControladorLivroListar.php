<?php
require "Modelos/Produto.php";
class ControladorProdutoListar{
    private $Produto;

    public function __construct(){
        $this->Produto = new Produto();
    }

    public function processaRequisicao(){
        $listaProd = $this->Produto->listarTodos();
        require "View/ListarLivro.php";
    }
}
    
    
?>