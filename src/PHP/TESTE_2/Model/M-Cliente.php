<?php
//TODO: Avisar que cliente esta faltando senha no modelo do BD!
require_once "Model/M-Conexao.php";

class Cliente {
    private $nome;
    private $cpf;
    private $cartao;
    private $dataDeIngresso;
    private $cnpjMercado;
    private $senha;

    public function __construct($nome, $cpf, $senha, $cnpjMercado=null, $cartao=null, $data=null) {
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->cnpjMercado=$cnpjMercado;
        $this->cartao=$cartao;
        $this->senha=$senha;
        $this->dataDeIngresso= $data===null? date('Y-m-d H:i:s') : $data;
    }
    
    public function getcpf(){
        return $this->cpf;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getcartao(){
        return $this->cartao;
    }
    public function getsenha(){
        return $this->senha;
    }
    public function getdataDeIngresso(){
        return $this->dataDeIngresso;
    }
    public function getcnpjMercado(){
        return $this->cnpjMercado;
    }

    public function setcpf($cpf){
        $this->cpf = $cpf;
    }
    public function setnome($nome){
        $this->nome = $inome;
    }
    public function setsenha($senha){
        $this->senha = $senha;
    }
    public function setdataDeIngresso($dataDeIngresso){
        $this->dataDeIngresso = $dataDeIngresso;
    }
    public function setcnpjMercado($cnpjMercado){
        $this->cnpjMercado = $cnpjMercado;
    }

    public static function BuscarCPF($cpf) {
        //TODO
    }
    public static function BuscarNome($nome) {
        //TODO
    }
    
}