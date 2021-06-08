<?php
require_once "Model/M-Conexao.php";

class Funcionario {
    private $nome;
    private $id;
    private $cnpjMercado;
    private $senha

    public function __construct($nome, $cnpjMercado, $senha, $id=null) {
        $this->nome=$nome;
        $this->cnpjMercado=$cnpjMercado;
        $this->id=$id;
        $this->senha=$senha;
    }

    public function getid(){
        return $this->id;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getcnpjMercado(){
        return $this->cnpjMercado;
    }
    public function getsenha(){
        return $this->senha;
    }

    public function setid($id){
        $this->id = $id;
    }
    public function setnome($nome){
        $this->nome = $inome;
    }
    public function setcnpjMercado($cnpjMercado){
        $this->cnpjMercado = $cnpjMercado;
    }
    public function setsenha($senha){
        $this->senha = $senha;
    }
}
?>