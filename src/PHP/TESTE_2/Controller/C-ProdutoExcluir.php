<?php
require "Model/M-Produto.php";

class ControleAtualizarProduto{
    public function ProcessaRequisicao() {
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
}
?>