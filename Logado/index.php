<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaDados/ValidaCadastro.php");
include_once("PHP/FunctionsDB/Crud/Select.php");
include_once("PHP/Banco/Banco.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Página Inicial</title>
<meta name="viewport" content="initial-scale=1">
<meta name="description" content="Sistema De Registro De Manutenções Veiculares">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/tabela.css">
<link  type="text/css" rel="stylesheet"  href="../InfoCarUser/Assets/CSS/Menu.css">
<script src="../InfoCarUser/Assets/JS/Interacao.js"></script>

</head>
<body>
 <header>
  <div class="container">
      <div class="MenuH1-toggle">
         <svg width="220" height="60" xmlns="http://www.w3.org/2000/svg">
          <rect width="100%" height="100%" fill="#ffffff"/>
          <g font-family="Arial, sans-serif" fill="#222">
            <path d="M30 35c0-5 4-9 9-9h15c5 0 9 4 9 9v5h2c1.1 0 2 .9 2 2v3h-4a4 4 0 1 1-8 0h-12a4 4 0 1 1-8 0h-4v-3c0-1.1.9-2 2-2h2v-5z" fill="#007BFF"/>
            <text x="70" y="40" font-size="24" fill="#007BFF">Info</text>
            <text x="110" y="40" font-size="24" fill="#222222">Car</text>
          </g>
</svg>
   </div>
    <nav>
        <ul class="MenuLinks">
        <li><a href="index.php" title="Página Inicial" class="PaginaInicialNav">Página Inicial</a></li>
        <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
        <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
        <li><a href="Manutencao.php" title="Manutenção" >Manutenção</a></li>
        <li><a href="MeusDados.php" title="Meus Dados" target="_blank">Meus Dados</a></li>
        </ul>
   </nav>
    <button class="menu-toggle" aria-label="Abrir menu">
      <svg width="30" height="24" viewBox="0 0 40 30" xmlns="http://www.w3.org/2000/svg">
        <rect y="0" width="40" height="4" rx="2" fill="#333"/>
        <rect y="12" width="40" height="4" rx="2" fill="#333"/>
        <rect y="24" width="40" height="4" rx="2" fill="#333"/>
      </svg>
    </button>
  </div>
 </header>
<main>
<section>
   <div class="index">
    <h1>Bem-vindo</h1>
    <p>Escolha Uma Dessas Opções Para Começar</p>
    <div class="button"> 
    <button><a href="CadastrarNovoCarro.php">Cadastrar Carro</a></button>
    <button><a href="Manutencao.php">Ver Carros Cadastrados</a></button>
    <button><a href="MeuCarro.php">Meu Carro</a></button>
    </div>
    </div>
</section>
</main>
<footer>
  
</footer>
</body>
</html>
