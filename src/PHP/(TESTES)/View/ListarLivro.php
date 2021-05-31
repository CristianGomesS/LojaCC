<?php 
$tituloPagina="Compra Certa - Produtos";
require "Cabecalho.php";
require "Botoes.php";

require "Modelos/Produto.php";
$Produto = new Produto();
$listaProd = $Produto->listarTodos();
?>

<div align="center">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<count($listaProd);$i++){ ?>
           <tr>
           <td><?php echo $listaProd[$i]->getNome(); ?></td>
           <td><?php echo $listaProd[$i]->getPreco(); ?></td>
           </tr>   
      <?php } ?>
    </tbody>
  </table>
<a href="CadLivro.php" class="btn btn-primary">Novo Produto</a>
</div>

  <?php require "Rodape.php";?>