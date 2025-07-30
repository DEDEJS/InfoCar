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
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/FormCadastro.css">
<script type="text/javascript" src="assets/JAVASCRIPT/ValidaCadastroCarro.js"></script>

</head>
<body>
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro" class="NovoCarroNav">Cadastrar Novo Carro</a></li>
  <li><a href="Manutencao.php" title="Manutenção" >Manutenção</a></li>
 </ul>
</nav>
<section class="Cadastro">
<form action="#" method="post">
<div>
 <h3>Placa</h3>
 <p class="error"><?php $ValidaCadastro->ValidaPlaca($Placa); 

 ?>

</p>
 <input type="text" placeholder="Placa:" name="Placa" id="Placa">
</div>
<div>
 <h3>Marca</h3>
 <p class="error">
 <?php 
$ValidaCadastro -> ValidaMarca($Marca, $Modelo);
$ValidaCadastro->  ValidaMarcaSelecionada();

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
<div class="MeuCarro" id="MeuCarroDiv">
   <h3>Meu Carro</h3>
   <p class="error"><?php $ValidaCadastro -> ValidaMeuCarro($MeuCarro); ?></p>
   <select name="MeuCarro" id="MeuCarro">
      <option>---</option>
      <option>Adicionar Ao Meu Carro</option>
      <option>Não Adicionar Ao Meu Carro</option>
   </select> 
</div>
<div class="Quilometragem" id="QuilometragemDiv">
   <h3>Quilometragem</h3>
   <p class="error"><?php $ValidaCadastro -> ValidaQuilometragem($Quilometragem); ?></p>
   <input type="number" placeholder="Quilometragem" name="Quilometragem" id="Quilometragem">
</div>
<input type="submit" value="Cadastrar">
<?php 
$ValidaCadastro->  ValidaMarcaSelecionada();
$ValidaCadastro -> HeaderCadastro($Placa,$Marca,$Modelo,$MeuCarro,$Quilometragem);
?>
</form>
</section>

</body>
</html>
