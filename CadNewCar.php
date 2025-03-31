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
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/FormCadastro.css">
<script type="text/javascript" src="JAVASCRIPT/ValidaCadastroCarro.js"></script>

</head>
<body>
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial" >Página Inicial</a></li>
  <li><a href="MyCar.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadNewCar.php" title="Cadastrar Novo Carro" class="NovoCarroNav">Cadastrar Novo Carro</a></li>
  <li><a href="Maintenance.php" title="Manutenção" >Manutenção</a></li>
  <li><a href="Upgrades.php" title="Upgrades">Upgrades</a></li>
 </ul>
</nav>
<section class="Cadastro">
<form action="#" method="post">
<div>
 <h3>Placa</h3>
 <p class="error"><?php $ValidaCadastro->ValidaPlaca($Placa); ?></p>
 <input type="text" placeholder="Placa:" name="Placa" id="Placa">
</div>
<div>
 <h3>Marca</h3>
 <p class="error">
 <?php 
$ValidaCadastro -> ValidaMarca($Marca, $Modelo);
?>
 </p>
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
</div>
<div class="Modelo" id="ModeloSelect">
  <h3>Modelo</h3>
  <p class="error">
   <?php 
   $ValidaCadastro -> Modelos();
    
$ValidaCadastro -> ValidaModelos($Modelo); 

    ?>
  </p>
  <select name="Modelo" id="Modelo">
  <option>Outro Modelo</option>
  <?php
      $ValidaCadastro -> ImprimeValores();
   ?>
  </select> 
</div>
<input type="submit" value="Cadastrar">
<?php 
$ValidaCadastro -> HeaderCadastro($Placa,$Marca,$Modelo);

?>
</form>
</section>

</body>
</html>
