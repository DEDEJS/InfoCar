<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaDados/ValidaTipoManutencao.php");
include_once("PHP/Value/ValueCadastroManutencao.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Manutenção</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/FormCadastro.css">
<link rel="stylesheet" type="text/css" href="assets/css/FormCadastroManutencao.css">
<script type="text/javascript" src="assets/JAVASCRIPT/ValidaCadastroManutencao.js"></script>
</head>
<body onload="return ValidaformCadastroManutencao();">
<nav>
 <ul>
 <li><a href="index.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadastraNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Manutencao.php" title="Manutenção" class="ManutencaoNav">Manutenção</a></li>
 </ul>
</nav>
<header>
<h3>Cadastrar Manutenção</h3>
</header>
<section class="Cadastro">
<form action="#" method="post">
<div id="SelectDiv">
   <h3>Tipo de Manutenção <span>*</span></h3> 
   <p class="error" id="ErrorTipoManutencao">
   <?php $TipoManutencao -> VerificaTipoManutencao(); ?>
   </p>
 <select name="tipo" id="Tipo">
    <option>---</option>
    <option>Preventiva</option>
    <option>Corretiva</option>
    <option>Outro</option>
 </select>
</div>
<input type="submit" value="Avançar">
<div>
   <p>Todos os campos com * São obrigatórios</p> 
</div>
</form>
</section>
</body>
</html>
