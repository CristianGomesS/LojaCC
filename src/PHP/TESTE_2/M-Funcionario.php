<?php
require_once "Conexao.php"
class Funcionario {
    public $nome;
    public $id;
    public $cnpjMercado;
    public $senha
    public function __construct($nome, $cnpjMercado, $senha, $id=null) {
        $this->nome=$nome;
        $this->cnpjMercado=$cnpjMercado;
        $this->id=$id;
        $this->senha=$senha;
    }

    public function Inserir() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "insert into Funcionario (Nome, Mercado_CNPJ, Senha) 
                values (:nome,:cnpj, :senha)"
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Funcionario Inserir Exception: ".$e->getmessage();
            return false;
        }
    }
    public function Deletar() {
        return Funcionario::DeletarID($this->id);
    }
    public function Atualizar() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Funcionario
                set 
                    Nome=:nome, 
                    Mercado_CNPJ=:cnpj,
                    Senha=:senha
                where IDfuncionario=:id";
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":id",$id);
            $sql->bindParam(":cnpj",$cnpjMercado);
            $sql->bindParam(":senha",$senha);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Funcionario Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
    public static function DeletarID($id) {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "delete from Funcionario where IDfuncionario=:id";
            );
            $sql->bindParam(":id",$id);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Funcionario Deletar Exception: ".$e->getmessage();
            return false;
        }
    }
    public static function Listar() {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Funcionario"); //lojacc.Funcionario
        
                
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaFuncionario=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $funcionario = new Funcionario(
                $linha['Nome'],  
                $linha['Mercado_CNPJ'],
                $linha['Senha'],
                $linha['IDfuncionario']
            );
            $listaFuncionario[$i] = $funcionario;
            ++$i;
            }
            return $listaFuncionario;
        }
        catch(PDOException $e){
            return array();
       }
    }
}
