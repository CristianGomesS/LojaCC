
<!-- Cabeçalho -->
<?php
  $tituloPagina = "Compra Certa - Cadastro";
    require 'Cabecalho.php';
?>
    
    <script src="../JS/JQuery.js"></script>
    <link rel="shortcut icon" href="../assets/favicon.png" />

    <title> Compra Certa - Cadastro </title>

  </head>

<body >


<!-- Botões-->
<?php
  require 'Botoes.php';
?>

    <body >
<main>
    <div class="alert alert-danger" id='errorDiv' role="alert">
        <p id='erro'></p>
    </div>
    <form class="form2 " id='entrada' action='./login.html' onsubmit="return !HouverErros();" name="FormCadas">
        <div class="card1">
            <div class="card-top1">
                <img class="imglogin" src="../assets/loogin.png" alt="">
                <h2 class="titulo"> Painel de controle</h2>
                <p>Cadastrar Usuario</p>
            </div>
            <div class="card-grupo1">
                
                <span class="	glyphicon glyphicon-user"> Nome</span>
                <input type="text" name="Nome"  style="text-transform: capitalize;" id='Nome' placeholder="Nome" required>
            </div>
            <div class="card-grupo1">
                <label>Sobrenome</label>
                <input type="text" name="Sobrenome"  style="text-transform: capitalize;" id='Sobrenome' placeholder="Sobrenome" required>
            </div>
            <div class="card-grupo1">
              <span class="glyphicon glyphicon-lock">Senha</span>
                <input id='senha1' type="password" name="senha1" placeholder="*******" required>
            </div>
            <div class="card-grupo1">
                <span class="glyphicon glyphicon-ok">Confirmar Senha</span>
                <input id='senha2' type="password" name="senha2" placeholder="*******" required>
            </div>
            <div class="card-grupo1">
                <span class="	glyphicon glyphicon-send"> Email</span>
                <input type="email" name="email" id='email' placeholder="CompraCerta@hotmail.com" required>
            </div>
            <div class="card-grupo1">
                <label>Data de Nascimento</label>
                <input type="date" name="Date" id='date'  required>
            </div>
            <Label>Casa ou Apartamento</Label>
            <select name="casaAP" required>
              <option>  </option>
              <option>Casa</option>
              <option>Apartamento</option>
            
            </select>
            <div class="card-grupo1">
              <label>Endereço</label>
              <input type="text" name="endereco" id='endereco' placeholder="endereço" required>
          </div>
          <div class="card-grupo1">
            <label>Bairro</label>
            <input type="text" name="bairro" id='bairro' placeholder="bairro" required>
        </div>
        <div class="card-grupo1">
          <label>CEP</label>
          <input type="number" name="CEP" id='CEP' placeholder="00.000-000" required>
      </div>
      <div class="card-grupo1">
        <label>Número</label>
        <input type="number" name="numero" id='numero' placeholder="Numero da casa ou apartamento" required>
    </div>

             <div class="checkbox">
             <label>Sexo:</label>
             <INPUT TYPE="RADIO" NAME="sexo" VALUE="cor">Masculino
             <INPUT TYPE="RADIO" NAME="sexo" VALUE="cor">Feminino
             <INPUT TYPE="RADIO" NAME="sexo" VALUE="cor">Não Binario
            </div>
            
            <div class="card-grupo1">
                <span class="	glyphicon glyphicon-phone">Telefone </span>
                <input type="text" name="Telefone" id='tel' placeholder="(99)9 9999-9999" >
            </div>

            <center>
                <div class="card-grupo1 btn1">

                    <button id='confirmar' type="submit"><span class="glyphicon glyphicon-floppy-saved"></span> Cadastrar-se </button>
                </div>
            </center>

            <div class="card-grupo1 btn1">

                <label><a  href="login.html"><i id="italico">já sou cadastrado</i> </label>

            </div>
            </center>


        </div>
    </form>
</main>

</body>

<!-- Rodapé -->
<?php require "Rodape.php";?>

<script src='../JS/cadastro.js'></script>

</html>

<!--  
  bairo numero rua cep
-->