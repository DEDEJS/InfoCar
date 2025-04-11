<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaDados/ValidaManutencao.php");
include_once("PHP/Value/ValueCadastroManutencao.php");
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
<script type="text/javascript" src="JAVASCRIPT/ValidaCadastroManutencao.js"></script>
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
<header>
<h3>MANUTENÇÂO</h3>
</header>
<section class="Cadastro">
<form action="#" method="post">
<div id="SelectDiv">
   <h3>Tipo de Manutenção</h3> 
   <p class="error" id="ErrorTipoManutencao">
   <?php $ValidaCadastroManutencao -> ValidaTipoManutencao($Tipo); ?>
   </p>
 <select name="tipo" id="Tipo" >
    <option>---</option>
    <option>Elétrica</option>
    <option>Motor</option>
    <option>Suspensão</option>
    <option>Outro</option>
 </select>
</div>
<div id="PecaDiv">
    <h3>Peça</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaPecaManutencao($Peca); ?>
    </p>
    <input type="text" placeholder="Peça Ex: Filtro De ar" name="Peca" id="Peca" value="<?php $ValueCadastroManutencao -> ValuePeca($GetValuePecaManutencao); ?>">
</div>
<div id="ValorPecaDiv">
    <h3>Valor Da Peça</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaValorPeca($ValorPeca); ?>
    </p>
    <input type="number" placeholder="Valor Da Peça" name="ValorPeca" id="ValorPeca" value="<?php $ValueCadastroManutencao -> ValueValorManutencao($GetValueValorManutencao); ?>">
</div>
<div id="ValorMaoObraDiv">
    <h3>Valor Da Mão De Obra</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaMaoDeObra($MaoDeObra); ?>
    </p>
    <input type="number" placeholder="Valor Da Mão De Obra" name="MaoDeObra" id="MaoDeObra"  value="<?php $ValueCadastroManutencao -> ValueMaoDeObraManutencao($GetValueMaoDeObraManutencao); ?>">
</div>
<div id="LocalFeitoManutencaoDiv">
    <h3>Local Que Foi Feita A Manutenção</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaLocalManutencao($LocalManutencao); ?>
    </p>
    <input type="text" placeholder="Ex: Rua Guaira, ***" name="LocalManutencao" id="LocalManutencao" value="<?php $ValueCadastroManutencao -> ValueLocalManutencao($GetValueLocalManutencao); ?>">
</div>
<div id="DataDiv">
    <h3>Data</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaDataManutencao($Data); ?>
    </p>
    <input type="date" name="Data" id="Data">
</div>
<div id="ObservacaoDiv">
    <h3>Observação</h3>
    <p class="error">
    <?php $ValidaCadastroManutencao -> ValidaObservacaoManutencao($Observacao) ?>   
    </p>
    <textarea name="observacao" id="Observacao" maxlength="300">
    <?php $ValueCadastroManutencao -> ValueObservacaoManutencao($GetValueObservacaoManutencao); ?>
    </textarea>
</div>
<input type="submit" value="Registrar">
<?php
 $ValidaCadastroManutencao -> CadastraManutencao($Tipo, $Peca,$ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao);
?>
</form>
</section>
</body>
</html>
