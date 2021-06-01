<?php
//TODO: Avisar que cliente esta faltando senha no modelo do BD!
require_once "Conexao.php"
class Cliente {
    public $nome;
    public $cpf;
    public $cartao;
    public $dataDeIngresso;
    public $cnpjMercado;
    public $senha

    public function __construct($nome, $cpf, $senha, $cnpjMercado=null, $cartao=null, $data=null) {
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->cnpjMercado=$cnpjMercado;
        $this->cartao=$cartao;
        $this->senha=$senha;
        $this->dataDeIngresso= $data===null? date('Y-m-d H:i:s') : $data;
    }
    public function Inserir() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "insert into Cliente (Nome, CPF, Cartao, DataDeIngresso, Mercado_CNPJ, Senha) 
                values (:nome,:cpf,:cartao,:data,:cnpj,:senha)"
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":cpf",$cpf);
            $sql->bindParam(":cartao",$cartao);
            $sql->bindParam(":data",$dataDeIngresso);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Cliente Inserir Exception: ".$e->getmessage();
            return false;
        }
    }
    public function Deletar() {
        return Cliente::DeletarCPF($this->cpf);
    }
    public function Atualizar() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Cliente 
                set 
                    Nome=:nome, 
                    Cartao=:cartao, 
                    DataDeIngresso=:data, 
                    Mercado_CNPJ=:cnpj,
                    Senha=:senha 
                where CPF=:cpf";
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":cpf",$cpf);
            $sql->bindParam(":cartao",$cartao);
            $sql->bindParam(":data",$dataDeIngresso);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Cliente Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
    public static function BuscarCPF($cpf) {
        //TODO
    }
    public static function BuscarNome($nome) {
        //TODO
    }
    //retorna array de pessoas com nome e senha
    public static function BuscarNomeSenha($nome, $senha) { //util para login
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Cliente where Nome=:nome and Senha=:senha"); //lojacc.Cliente
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":senha",$senha);

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaClientes=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cliente = new Cliente(
                $linha['Nome'], 
                $linha['CPF'], 
                $linha['Senha'], 
                $linha['Mercado_CNPJ'],
                $linha['Cartao'], 
                $linha['DataDeIngresso']
            );
            $listaClientes[$i] = $cliente;
            ++$i;
            }
            return $listaClientes;
        }
        catch(PDOException $e){
            //Todo mensagem de erro aqui
            return array();
       }
    }
    public static function Listar() {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Cliente"); //lojacc.Cliente
        
                
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaClientes=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $cliente = new Cliente(
                $linha['Nome'], 
                $linha['CPF'], 
                $linha['Senha'], 
                $linha['Mercado_CNPJ'],
                $linha['Cartao'], 
                $linha['DataDeIngresso']
            );
            $listaClientes[$i] = $cliente;
            ++$i;
            }
            return $listaClientes;
        }
        catch(PDOException $e){
            return array();
       }
    }
    public static function DeletarCPF($cpf) {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "delete from Cliente where CPF=:cpf";
            );
            $sql->bindParam(":cpf",$cpf);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Cliente Deletar Exception: ".$e->getmessage();
            return false;
        }
    }
}