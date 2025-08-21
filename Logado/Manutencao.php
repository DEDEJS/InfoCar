<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Banco/banco.php");
include_once("PHP/ValidaDados/ValidaCadastro.php");
include_once("PHP/FunctionsDB/Crud/Select.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Manutenção</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link  type="text/css" rel="stylesheet"  href="../InfoCarUser/Assets/CSS/Menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/FormCadastro.css">
<link rel="stylesheet" type="text/css" href="assets/css/FormCadastroManutencao.css">
<link rel="stylesheet" type="text/css" href="assets/css/Tabela.css">
<link rel="stylesheet" type="text/css" href="assets/css/Search.css">
</head>
<body onload="return ValidaformCadastroManutencao();">
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
  <li><a href="index.php" title="Página Inicial">Página Inicial</a></li>
  <li><a href="MeuCarro.php" title="Meu Carro" class="MeuCarroNav">Meu Carro</a></li>
  <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Manutencao.php" title="Manutenção">Manutenção</a></li>
  <li><a href="MeusDados.php" title="Meus Dados" target="_blank">Meus Dados</a></li>
 </ul>
 <button class="menu-toggle" aria-label="Abrir menu">
      <svg width="30" height="24" viewBox="0 0 40 30" xmlns="http://www.w3.org/2000/svg">
        <rect y="0" width="40" height="4" rx="2" fill="#333"/>
        <rect y="12" width="40" height="4" rx="2" fill="#333"/>
        <rect y="24" width="40" height="4" rx="2" fill="#333"/>
      </svg>
 </button>
</nav>
</header>
<main>
  <section class="Search">
    <h3>Procurar Por Marca</h3>
<form action="#" method="POST">
<?php 
$ValidaCadastro -> ValidaMarca($Marca);
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
</section>   
<section>
<?php 
 $SelectCar -> SearchMarca($Search, $Marca, $Conecta); 
 $SelectCar -> SelectCars($Conecta);

?>
</section>
</main>

</body>
</html>
