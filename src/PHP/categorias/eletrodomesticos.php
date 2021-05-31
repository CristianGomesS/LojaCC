<!-- Cabeçalho -->
<?php
  $tituloPagina = "Compra Certa - EletroDomesticos";
    require 'Cabecalho.php';
?>
  <title>Compra Certa - EletroDomesticos</title>
  
</head>
<!-- Botões-->
<?php
  require 'Botoes.php';
?>

<body>

<div class="jumbotron">
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div style="text-align: center;"> <h2>Promoções Imperdíveis!</h2></div>
      <div style="text-align: center;"> <h4>Não perca essas oportunidades!</h4></div>  
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        
        <div class="item active">
          <a href="#"><img src="../../assets/imgCategoria/promocoes/promo_bethânia_lins.png"></a>
          <div class="carousel-caption">

          </div>
        </div>
  
        <div class="item">
          <a href="#"><img src="../../assets/imgCategoria/promocoes/1384f914721727.57e288175613d.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
      
        <div class="item">
          <a href="#"><img src="../../assets/imgCategoria/promocoes/Sem título.png"></a>
          <div class="carousel-caption">

          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
      </div>
</div>
<br><br>

<div class="card-bg" >
  <div class='container-fluid bg-3 text-center'>
    <h3>Mais Vendidos</h3>
      <div class='row'>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Eletrodomesticos/fog1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Fogão 4 bocas</h5>
                <p class='card-text'>R$ 799,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Eletrodomesticos/gela1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Geladeira</h5>
                <p class='card-text'>R$1599,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Eletrodomesticos/lava1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Maquina de lavar </h5>
                <p class='card-text'>R$2099,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Eletrodomesticos/ondas1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Forno Micro Ondas philco</h5>
                <p class='card-text'>R$700,00</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="card-bg " >

<div class="container-fluid bg-3 text-center">    
  <h3>Produtos</h3>
  <div>
    <table class="center">
     <tr>
       <th>
         <div class="card-itens  sizeEstante">
          <div class="itenEstante ">
            <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/fog1.jpg" alt="">
            <div  id="sub-card" class=" ">
              <h4 class="">Fogão 4 bocas <br> </h4>
              </div>  <div class=" preco">
              <h5>R$ 799,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
         </div>
       </th>
       <th>
        <div class="card-itens sizeEstante  ">
         <div class="itenEstante">
           <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/fog2.jpg" alt="">
           <div id="sub-card"  class="">
             <h4 class="">Fogão 4 bocas </h4>
             </div>  <div class="preco">
             <h5>R$ 1599,99</h5>
             <button class="btn  ">Adicionar</button>
            </div>
         </div>
        </div>
      </th>
      <th>
        <div class="card-itens sizeEstante ">
         <div class="itenEstante">
           <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/gela1.jpg" alt="">
           <div id="sub-card"  class="">
             <h4 class=""> Geladeira Frost-free. obs: muito gelada ;)</h4>
             </div>  <div class="preco">
             <h5>R$ 2099,99</h5>
             <button class="btn  ">Adicionar</button>
           </div>
         </div>
        </div>
      </th>
      <th>
        <div class="card-itens sizeEstante ">
         <div class="itenEstante">
           <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/gela2.jpg" alt="">
           <div id="sub-card"  class="">
             <h4 class="">Outra geladeira Frost-free. também muito gelada.</h4>
             </div>  <div class="preco">
             <h5>R$ 3500,00</h5>
             <button class="btn  ">Adicionar</button>
           </div>
         </div>
        </div>
      </th>
     
      
     </tr>
     <tr>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/gela3.jpg" alt="">
            <div id="sub-card"  class="">
              <h4 class="">Geladeira frost-free. adivinha também e muito gelada eu garanto.</h4>
              </div>  <div class="preco">
              <h5>R$ 5599,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/gela4.jpg" alt="">
            <div id="sub-card"  class="">
              <h4 class="">Acho que você já sabe ne, pelo preço tem que ser gelada kkkk' </h4>
              </div>  <div class="preco">
              <h5>R$ 7999,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/lava1.jpg" alt="">
            <div id="sub-card"  class=" ">
              <h4 class="">Maquina de lavar - lava e seca</h4>
              </div>  <div class="preco">
              <h5>R$ 4000,00</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/imgCategoria/Eletronicos/Eletrodomesticos/ondas1.jpg" alt="">
            <div id="sub-card" class="">
              <h4 class="">Forno Micro Ondas Philco </h4>
              </div>  <div class="preco">
              <h5>R$ 700,00</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
     
     </tr>
     <tr>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/Logo.png" alt="">
            <div id="sub-card"  class="">
              <h4 class="">A Invenção de Hugo Cabret-<br>de Brian Selznick </h4>
              </div>  <div class="preco">
              <h5>R$ 39,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/Logo.png" alt="">
            <div id="sub-card" class="">
              <h4 class="">A Invenção de Hugo Cabret-<br>de Brian Selznick </h4>
              </div>  <div class="preco">
              <h5>R$ 39,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/Logo.png" alt="">
            <div id="sub-card"  class="">
              <h4 class="">A Invenção de Hugo Cabret-<br>de Brian Selznick </h4>
            </div>  <div class="preco">
             <hr class="divisoria">
              <h5>R$ 39,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/Logo.png" alt="">
            <div id="sub-card"  class="">
              <h4 class="">A Invenção de Hugo Cabret-<br>de Brian Selznick </h4>
              </div>  <div class="">
                <hr class="divisoria">
              <h5>R$ 39,99</h5>
              <button class="btn  ">Adicionar</button>
            </div>
          </div>
        </div>
      </td>
     
     </tr>
    </table>

    <nav aria-label="...">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Primeira</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Anterior</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Próxima</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Última</a>
        </li>
      </ul>
    </nav>

  </div>
</div>
</div>

<br><br>

</body>
<!-- Rodapé -->
<?php require "Rodape.php";?>
