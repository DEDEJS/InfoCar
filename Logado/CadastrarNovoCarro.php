<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaDados/ValidaCadastro.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro De Carro</title>
<meta name="viewport" content="initial-scale=1">
<link  type="text/css" rel="stylesheet"  href="../assets/CSS/Menu.css">
  <link rel="stylesheet" href="../assets/CSS/Form.css">

<script type="text/javascript" src="assets/JAVASCRIPT/ValidaCadastroCarro.js"></script>

</head>
<body>
<header>
   <div class="container">
   <div class="MenuH1-toggle">
   <a href="index.php">
   <svg width="220" height="60" xmlns="http://www.w3.org/2000/svg">
   <rect width="100%" height="100%" fill="#ffffff"/>
   <g font-family="Arial, sans-serif" fill="#222">
   <path d="M30 35c0-5 4-9 9-9h15c5 0 9 4 9 9v5h2c1.1 0 2 .9 2 2v3h-4a4 4 0 1 1-8 0h-12a4 4 0 1 1-8 0h-4v-3c0-1.1.9-2 2-2h2v-5z" fill="#007BFF"/>
   <text x="70" y="40" font-size="24" fill="#007BFF">Info</text>
   <text x="110" y="40" font-size="24" fill="#222222">Car</text>
   </g>
   </svg>
   </a>
   </div>
   <nav id="main-nav">
   <ul class="MenuLinks">
      <li><a href="index.php" title="Página Inicial" class="PaginaInicialNav">Página Inicial</a></li>
      <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
      <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
      <li><a href="Manutencao.php" title="Manutenção" >Manutenção</a></li>
      <li><a href="MeusDados.php" title="Meus Dados" target="_blank">Meus Dados</a></li>
   </ul>
   </nav>
   </div>
</header>
<main class="cadastro">
   <div class="container">
      <form action="#" method="post"  class="form-cadastro">
      <label for="Placa">Placa <span><?php $ValidaCadastro->ValidaPlaca($Placa); ?></span></label>
      <input type="text" placeholder="Placa:" name="Placa" id="Placa">
   
      <label for="Marca">Marca</label>
      <span class="error"><?php $ValidaCadastro -> ValidaMarca($Marca, $Modelo); $ValidaCadastro->  ValidaMarcaSelecionada();?></span>
      <select name="Marca" id="Marca" onclick="return ValidaformCadastro();">
         <option>---</option>
         <option>Audi</option>
         <option>Bmw</option>
         <option>Chevrolet</option>
         <option>Fiat</option>
         <option>Ford</option>
         <option>Honda</option>
         <option>Hyundai</option>
         <option>Jeep</option>
         <option>Kia</option>
         <option>Mercedes</option>
         <option>Renault</option>
         <option>Volkswagen</option>
      </select>
      <label for="Modelo" >Modelo <span><?php $ValidaCadastro -> Modelos(); $ValidaCadastro -> ValidaModelos($Modelo); ?></span></label>
      <select name="Modelo" id="ModeloSelect">
      <option>Outro Modelo</option>
      <?php
            $ValidaCadastro -> ImprimeValores();
         ?>
      </select> 
         <label for="MeuCarro">Meu Carro <span><?php $ValidaCadastro -> ValidaMeuCarro($MeuCarro); ?></span></label>
         <select name="MeuCarro" id="MeuCarro">
            <option>---</option>
            <option>Adicionar Ao Meu Carro</option>
            <option>Não Adicionar Ao Meu Carro</option>
         </select> 
         <label>Quilometragem <span class="error"><?php $ValidaCadastro -> ValidaQuilometragem($Quilometragem); ?></span></label>
         <input type="number" placeholder="Quilometragem" name="Quilometragem" id="Quilometragem">
        <button type="submit" class="btn-primary" value="button" name="button" id="button">Cadastrar</button>
      <?php 
      $ValidaCadastro->  ValidaMarcaSelecionada();
      $ValidaCadastro -> HeaderCadastro($Placa,$Marca,$Modelo,$MeuCarro,$Quilometragem);
      ?>
      </form>
    </div>
</main>

</body>
</html>
