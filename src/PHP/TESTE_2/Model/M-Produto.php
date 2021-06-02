<?php
require "Model/M-Conexao.php";

class Produto {
    private $idProduto;
    private $nome;
    private $preco;
    private $estoque;
    private $totalDeVendas;
    private $idCategoria;

    public function __construct($nome, $preco, $estoque, $totalDeVendas, $idCategoria, $idProduto=null) {
        $this->nome=$nome;
        $this->preco=$preco;
        $this->estoque=$estoque;
        $this->totalDeVendas=$totalDeVendas;
        $this->$idCategoria=$idCategoria;
        $this->idProduto=$idProduto;
    }

    public function getidproduto(){
        return $this->idproduto;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getpreco(){
        return $this->preco;
    }
    public function getestoque(){
        return $this->estoque;
    }
    public function gettotalDeVendas(){
        return $this->totalDeVendas;
    }
    public function getidcategoria(){
        return $this->idCategoria;
    }

    public function setcategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }
    public function setidProduto($idProduto){
        $this->idproduto = $idProduto;
    }
    public function setnome($nome){
        $this->nome = $nome;
    }
    public function setpreco($preco){
        $this->preco = $preco;
    }
    public function setestoque($estoque){
        $this->estoque = $estoque;
    }
    public function settotalDeVendas($totalDeVendas){
        $this->totalDeVendas = $totalDeVendas;
    }
    
    public function Comprar($compra) {
        /*$estoque-=$compra->//quantidade vinda da compra, portanto comprar requer um parametro Compra;
        $totalDeVendas+=//mesma coisa que o de cima
        Atualizar();*/
    }
}