<?php
//A view ira receber varios parametros, que ela usara para renderizar as oicsas na pagina
//Aqui temos um exemplo simples, onde ela escolhe ou nao renderizar o anuncio dependendo do que o "Controller" diz
//Entretanto, como nao temos um controller, iremos manualmente escolher algum valor abaixo: true ou falso
$_REQUEST["anuncio"]=false;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Compra Certa - Celulares</title>
  <link rel="stylesheet" href="../../css/header-footer.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/Estrutura.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/categoria.css">
</head>
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