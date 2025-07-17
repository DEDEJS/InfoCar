<?php
ini_set('default_charset','UTF-8');
include_once("PHP/ValidaDados/ValidaTipoManutencao.php");

include_once("PHP/ValidaDados/ValidaManutencao.php");
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
<?php
$TipoManutencao -> Campos($ValidaCadastroManutencao);
$TipoManutencao -> SelecionaCamposTipo();
?>
<input type="submit" value="Registrar">

</form>
</section>
</body>
</html>