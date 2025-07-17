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
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/Tabela.css">
<link rel="stylesheet" type="text/css" href="assets/css/Search.css">

<style>
.Observacao{
    margin-top:3%;
    display: flex;
    
}
.Observacao{

}
</style>
</head>
<body onload="return ValidaformCadastroManutencao();">
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Manutencao.php" title="Manutenção" class="ManutencaoNav">Manutenção</a></li>
 </ul>
</nav>
<header>
<div class="Search">
    <button><a href="TipoManutencao.php?IdNovaManutencao=<?php echo $_GET['Car']; ?> " target="_blank">Cadastrar Nova Manutenção</a></button>
<form action="#" method="Get">
    <input type="search" placeholder="Procurar Por Peça" name="SearchPeca">
    <input type="submit" value="Procurar">
</form>
</div>
</header>
    <?php 
        $SelectMaintenance -> GetIdUrl();
        $SelectMaintenance -> VerificaSeManutencaoExiste($Conecta);
        $SelectMaintenance -> SelectIdMaintenance($Conecta);
    ?>
</body>
</html>
