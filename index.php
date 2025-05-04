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
<link rel="stylesheet" type="text/css" href="assets/css/Search.css">

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
<header>
<div class="Search">
    <h3>Procurar Por Marca</h3>
<form action="#" method="POST">
<?php $ValidaCadastro -> ValidaMarca($Marca);
$Search = $ValidaCadastro -> ValidaSearch(); 
?>
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
    <option>Mercedes-Bens</option>
    <option>Renault</option>
    <option>Volkswagen</option>
 </select>
     <input type="submit" value="Procurar">
</form>
</div>
</header>
<?php $SelectCar -> SearchMarca($Search, $Marca, $Conecta); ?>
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
