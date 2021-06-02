<?php
require "Model/M-Funcionario.php";

class ControleExcluirFuncionario{
    public function processaRequisicao() {
        return Funcionario::DeletarID($this->id);
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
}

?>