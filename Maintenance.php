<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Banco/banco.php");
include_once("PHP/FunctionsDB/Crud/Select.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Manutenção</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/FormCadastro.css">
<link rel="stylesheet" type="text/css" href="css/FormCadastroManutencao.css">
<link rel="stylesheet" type="text/css" href="css/Tabela.css">

</head>
<body onload="return ValidaformCadastroManutencao();">
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial" >Página Inicial</a></li>
  <li><a href="MyCar.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadNewCar.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Maintenance.php" title="Manutenção" class="ManutencaoNav">Manutenção</a></li>
  <li><a href="Upgrades.php" title="Upgrades">Upgrades</a></li>

 </ul>
</nav>

    <?php 
       $SelectCar -> SelectCars($Conecta);

    ?>
</body>
</html>
