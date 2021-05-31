<!-- Cabeçalho -->
<?php
  $tituloPagina = "Compra Certa - Login";
    require 'Cabecalho.php';
?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equive="x-UA-Compatible" content="ie=edge">

    
    
    <title> Compra Certa - login </title>
</head>
    <body >
        
<!-- Botões-->
<?php
  require 'Botoes.php';
?>
        <main>
        <form class="form1">
            <div class="card1">
                <div class="card-top1">
                    <img class="imglogin" src="../assets/Logo.png" alt="">
                    <h2 class="title"> Painel de controle</h2>
                    <p>Login</p>
                </div>
                <div class="card-grupo1">
                  <span class="glyphicon glyphicon-user">Email</span>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="card-grupo1 ">
                    <span class="glyphicon glyphicon-lock">Senha</span>
                    <input type="password" name="Senha" placeholder="Digite sua Senha" required>
                </div>
                <div class="card-grupo1">
                    <label><input type="checkbox">Lembre-me</label>
                </div>
                <center>
                    <div class="card-grupo1 btn1">
                        <button ><a href="index.html" class="tagA"> Acessar</button>
                    </div>
                </center>
        
                <center>
                    <div class="card-grupo1 btn1">
        
                        <button  type="button"><a class="tagA" href="cadastro.html"> Cadastra-se</button>
        
                    </div>
                </center>
            </form> 

        
    </div>

   
    </main>
    </body>

    <!-- Rodapé -->
    <?php require "Rodape.php";?>
 