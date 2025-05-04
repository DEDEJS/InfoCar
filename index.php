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
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/tabela.css">
</head>
<body>
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial" class="PaginaInicialNav">Página Inicial</a></li>
  <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Manutencao.php" title="Manutenção" >Manutenção</a></li>
 </ul>
</nav>
<main>
 <div class="MainTop">
    <h1>InfoCar</h1>
    <p>Sistema de controle de manutenções</p>
</div>
</main>
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
</body>
</html>
