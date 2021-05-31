<?php 
$tituloPagina = "Cadastro do Livros";
require 'Cabecalho.php';

require "Produto.php";

?>

  <form name="cadLivro" method = "post" action="incluirLivro">
  <div class="form-group">
    <div class="form-group">
    <label for="nome">Categoria do produto:</label>
      <input type="text" class="form-control" id="ID_Produto" placeholder="Informe a categoria do Produto:" name="ID_Produto" required>
    </div>
      <label for="nome">Nome do produto:</label>
      <input type="text" class="form-control" id="Nome" placeholder="Informe o nome do Produto:" name="Nome" required>
    </div>
    <div class="form-group">
        <label for="edicao">Preço Estimado:</label>
        <input type="text" class="form-control" id="Preco" placeholder="Informe o preço Estimado:" name="Preco" required>
      </div>
    <div class="form-group">
        <label for="ano">Estoque:</label>
        <input type="ano" class="form-control" id="Estoque" placeholder="Informe o estoque estimado:" name="Estoque" required>
      </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
<?php require "Rodape.php";?>