<?php 
require_once "Cabecalho.php";
require_once "ProdutoDAO.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header ">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class=" alingLogo " href="#"> <img  class="logo" src="../../assets/Logo.png" alt=""> </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../page/index.html">Home</a></li>
          <li class=""><a href="#">Sobre</a></li>
          <li><a href="#">Galeria</a></li>
          <li  class="active"><a href="../contato.html">Contato</a></li>
          <div class="btn-group">
            <button class="btn btn2 btn-secondary dropdown-toggle active" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                  Categoria

            </button>
            <ul class="dropdown-menu dropdown-menu-Left row " aria-labelledby="triggerId">
              <li class="col-sm-4">

                <h4 class="categoriaColor">Eletrônicos</h4>

                <a href="../categorias/celulares.html">Celulares</a>
                <a href="../categorias/Videogames.html">Videogames</a>
                <a href="../categorias/eletrodomesticos.html">Eletrodomésticos</a>
                <a href="#">Televisores </a>  
                <a href="#">Computadores</a>
                <a href="#">Notebooks</a>
                
              </li>
              <li class="col-sm-4">

                <h4 class="categoriaColor">Móveis</h4>
                
                <a href="#">Jogo de mesas</a>
                <a href="#">Sofás</a>  
                <a href="#">Estantes</a>
                <a href="#">Guarda-Roupas</a>
                <a href="#">Camas</a>
              </li>
              <li class="col-sm-4">

                <h4 class="categoriaColor">Diversos</h4>
                
                <a href="#">Jogo de cama</a>
                <a href="#">Jogo de estofado</a>
                <a href="#">Porcelanas</a>  
                <a href="#">Talheres</a>
                <a href="#">Taças</a>
              </li>
            </ul>
             
           </div>
         </ul>
        
        <form class="navbar-form navbar-left" action="#">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../pagamento.html"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
          <li><a href="../cadastro.html"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
          <li><a href="../login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  

            </div>
          </div>
        </ul>
        
      </div>
     
    </div>
  </div>
</header>
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
          <a href="#"><img src="../../assets/imgCategoria/promocoes/livelo-samsung-ganhe-pontos-celular.png"></a>
          <div class="carousel-caption">

          </div>
        </div>
  
        <div class="item">
          <a href="#"><img src="../../assets/imgCategoria/promocoes/banner_celulares.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
      
        <div class="item">
          <a href="#"><img src="../../assets/imgCategoria/promocoes/unknown.png"></a>
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
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Celulares/IPH1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Papel Higiênico Fofinho 30m Folha Dupla 64 Rolos</h5>
                <p class='card-text'>R$ 799,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Celulares/IPH2.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Escova de Dente Oral-b Color Pack Com 5 Unidades</h5>
                <p class='card-text'>R$1599,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Celulares/MOTO1.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Preservativo Jontex Xl Sensitive Com 3 Unidades</h5>
                <p class='card-text'>R$2099,99</p>
                <button class="btn  ">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='card'>
            <div class="card-itens">
              <img class='card-img-top' src='../../assets/imgCategoria/Eletronicos/Celulares/MOTO2.jpg'></img>
              <div class='card-body'>
                <h5 class='card-title'>Condicionador Elseve Reparação Total 5 Extra Profundo 200ml</h5>
                <p class='card-text'>R$3500,00</p>
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
    <?php for($i=0;$i<count($listaProd);$i++){ ?>
      <td>
      <div class="card-itens sizeEstante">
          <div class="itenEstante">
            <img class="imgEstante" src="../../assets/Logo.png" alt="">
            <div id="sub-card"  class="">
            <tr><?php echo $listaProd[$i]->getNome(); ?></tr>
            <tr><?php echo $listaProd[$i]->getPreco(); ?></tr>
            <button class="btn  ">Adicionar</button>
            </div>
          </div>
      </td> 
    </div>  
      <?php } ?>
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
<hr class="marcador-div">
  
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">Grupo Busca pé, 2021</p>
  
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
  <p class="float-end">
    <a  class="tagA-hover" href="#"> Back to top</a>
</p>
</footer>
</html>