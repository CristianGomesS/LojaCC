<!-- Cabeçalho -->
<?php
  $tituloPagina = "Compra Certa - Index";
    require 'Cabecalho.php';
    require 'Botoes.php';
?>

<title>Compra Certa</title>
  <style>
  
  </style>
</head>

<!-- Botões-->
<?php
  require 'Botoes.php';
?>

<body>

    <div id="myCarousel" class="carousel slide" data-ride="carousel ">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../assets/CC-Propagandas1.png" alt="Image">
            <div class="carousel-caption">
              <h3>Chá de Casa Nova</h3>
              <p>Veja as nossas oportunidades!</p>
            </div>      
          </div>
    
          <div class="item">
            <img src="../assets/CC-Propagandas2.png" alt="Image">
            <div class="carousel-caption">
              <h3>Semana Tech</h3>
              <p>Confira nossas promoções!</p>
            </div>      
          </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
      
  <div class="jumbotron">   
    <div class="container">
      <div class="row">
        <div class="row-lg-12">
          <h3>Promoções do Dia:</h3>
          <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel2"  class="active"></li>
              <li data-target="#myCarousel2"></li>
             
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
              <div class="item active" >
                <div id="display"  class="container-fluid">
                    <table>
                       <tr><th>
                        <div id="itensSlide" class="card-bg">
                         <div class="imgCarousel2"> <img class="imgsize" src="../assets/suporte-para-tv-fixo.jpg" alt="">
                          
                          <div class="textCenter">  Suporte para TV fixo
                          <p>R$89,90</p></div>
                          
                        </div>
                        </div>
                       </th>
                    <th>
                        <div id="itensSlide" class="card-bg">
                          <div class="imgCarousel2"> <img class="imgsize" src="../assets/Sofá-Retrátil-Reclinável-2Lugares.jpg" alt="">
                            <div class="textCenter">Sofá reclinável Dobrável (2 lugares)
                              <p>R$1.709,90</p></div>
                          </div>
                        </div>
                    </th>
                    <th>
                        <div id="itensSlide" class="card-bg">
                          <div class="imgCarousel2"> <img class="imgsize" src="../assets/Playstation-5-825GB.jpg" alt="">
                            <div class="textCenter">  PlayStation 5 (825 GB)
                              <p>R$7.559,90</p></div>
                          </div>
                        </div>
                    </th>
                </tr>
                    </table>
                </div>
            </div>
            <div class="item " >
                <div id="display"  class="container-fluid">
                    <table>
                       <tr><th>
                        <div id="itensSlide" class="card-bg">
                          <div class="imgCarousel2"> <img class="imgsize" src="../assets/Divã-Recamier-Para-Sala-E-Quarto.jpg" alt="">
                            <div class="textCenter">Divã Recamier
                              <p>R$1.329,90</p></div>
                          </div>
                        </div>
                       </th>
                    <th>
                        <div id="itensSlide" class="card-bg">
                          <div class="imgCarousel2"> <img  class="imgsize" src="../assets/Conjunto-Mesa-4Cadeiras-Estofadas.jpg" alt="" >
                            <div class="textCenter" >  Conjunto: mesa + 4 cadeiras estofadas
                              <p>R$1.590,90</p></div>
                          </div>
                        </div>
                    </th>
                    <th>
                        <div id="itensSlide" class="card-bg">
                          <div class="imgCarousel2"> <img class="imgsize" src="../assets/Conjunto-6Taças-Ambar-Metalizado.jpg" alt="" >
                            <div class="textCenter">  Conjunto: 6 aças de água/vinho
                              <p>R$159,90</p></div>
                          </div>
                        </div>
                    </th>
                    
                </tr>
                    </table>
                </div>
            </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
       <br><br>
        <div class="card-bg" >
          <div class='container-fluid bg-3 text-center'>
            <h3>Confira outros produtos:</h3>
              <div class='row'>
                <div class='col-md-3'>
                  <div class='card'>
                    <div class="card-itens">
                      <img src='../assets/Samsung-Smart-TV-Tizen-HD-32Polegadas.png' class="img-responsive"></img>
                      <div class='card-body'>
                        <h5 class='card-title'>Samsung Smart TV Tizen HD (32 Polegadas)</h5>
                        <p class='card-text'>R$ 1.299,90</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-md-3'>
                  <div class='card'>
                    <div class="card-itens">
                      <img src='../assets/Xbox-One-S-1TB-2Controles.jpg' class="img-responsive"></img>
                      <div class='card-body'>
                        <h5 class='card-title'>Xbox One S (1 TB + 2 controles)</h5>
                        <p class='card-text'>R$2.299,90</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-md-3'>
                  <div class='card'>
                    <div class="card-itens">
                      <img src='../assets/Smartphone-Samsung-Galaxy-a10.jpg' class="img-responsive"></img>
                      <div class='card-body'>
                        <h5 class='card-title'>Smartphone Samsung Galaxy A10</h5>
                        <p class='card-text'>R$1.299,90</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-md-3'>
                  <div class='card'>
                    <div class="card-itens">
                      <img src='../assets/Conjunto-Mesa-7cm+4Cadeiras.jpg' class="img-responsive"></img>
                      <div class='card-body'>
                        <h5 class='card-title'>Conjunto Mesa de Madeira (75cm) + 4 cadeiras</h5>
                        <p class='card-text'>R$529,90</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

     
    </div>
  </body>

</body>


<!-- Rodapé -->
<?php require "Rodape.php";?>