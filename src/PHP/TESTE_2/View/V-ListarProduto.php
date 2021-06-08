<?php
require "V-Cabecalho.php";
require "V-Botoes.php";
?>

  <a href="V-NovoProduto" class="btn btn-primary">Novo Produto</a>
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

<?php
require "V-Rodape.php";
?>