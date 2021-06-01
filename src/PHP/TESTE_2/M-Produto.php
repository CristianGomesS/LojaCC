<?php
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
    public function Inserir() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "insert into Produto (Nome, Preco, Estoque, TotalDeVendas, Categoria_CategoriaID) 
                values (:nome,:preco,:estoque,:totalDeVendas,:idCategoria)"
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":preco",$preco);
            $sql->bindParam(":estoque",$estoque);
            $sql->bindParam(":totalDeVendas",$totalDeVendas);
            $sql->bindParam(":idCategoria",$idCategoria);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Produto Inserir Exception: ".$e->getmessage();
            return false;
        }
    }
    public function Atualizar() {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "update Produto
                set 
                    Nome=:nome, 
                    Preco=:preco,
                    Estoque=:estoque,
                    TotalDeVendas=:totalDeVendas,
                    Categoria_CategoriaID=:idCategoria
                where IDproduto=:id";
            );
            $sql->bindParam(":nome",$nome);
            $sql->bindParam(":id",$id);
            $sql->bindParam(":preco",$preco);
            $sql->bindParam(":estoque",$estoque);
            $sql->bindParam(":totalDeVendas",$totalDeVendas);
            $sql->bindParam(":idCategoria",$idCategoria);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Produto Atualizar Exception: ".$e->getmessage();
            return false;
        }
    }
    public function Deletar() {
        return Produto::DeletarID($this->id);
    }
    public static function DeletarID($id) {
        try{
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare(
                "delete from Produto where IDproduto=:id";
            );
            $sql->bindParam(":id",$id);
            $sql->execute();
            return true;
        }
        catch(PDOException $e) {
            echo "Produto Deletar Exception: ".$e->getmessage();
            return false;
        }
    }
    public static function BuscarID($id) {

    }
    public static function BuscarNome($nome) {

    }
    public static function BuscarCategoria($idCategoria) {

    }
    public static function Listar() {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from Produto"); //lojacc.Funcionario
        
                
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $listaProduto=array();
            $i=0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto(
                $linha['Nome'],  
                $linha['Preco'],
                $linha['Estoque'],
                $linha['TotalDeVendas'],
                $linha['Categoria_CategoriaID'],
                $linha['IDproduto']
            );
            $listaProduto[$i] = $produto;
            ++$i;
            }
            return $listaProduto;
        }
        catch(PDOException $e){
            return array();
       }
    }
    public function Comprar($compra) {
        /*$estoque-=$compra->//quantidade vinda da compra, portanto comprar requer um parametro Compra;
        $totalDeVendas+=//mesma coisa que o de cima
        Atualizar();*/
    }
}