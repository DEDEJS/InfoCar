<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Banco/Banco.php");
include_once("PHP/ValidaDados/ValidaCadastro.php");
include_once("PHP/FunctionsDB/Crud/Select.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Página Inicial</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link  type="text/css" rel="stylesheet"  href="../assets/CSS/Menu.css">
<link  type="text/css" rel="stylesheet"  href="../assets/CSS/Footer.css">
<link rel="stylesheet" type="text/css" href="assets/css/tabela.css">
<link rel="stylesheet" type="text/css" href="assets/css/Search.css">
</head>
<body>

<header>
<div class="container">
 <div class="MenuH1-toggle">
  <a href="index.php">
  <svg width="220" height="60" xmlns="http://www.w3.org/2000/svg">
  <rect width="100%" height="100%" fill="#ffffff"/>
  <g font-family="Arial, sans-serif" fill="#222">
  <path d="M30 35c0-5 4-9 9-9h15c5 0 9 4 9 9v5h2c1.1 0 2 .9 2 2v3h-4a4 4 0 1 1-8 0h-12a4 4 0 1 1-8 0h-4v-3c0-1.1.9-2 2-2h2v-5z" fill="#007BFF"/>
  <text x="70" y="40" font-size="24" fill="#007BFF">Info</text>
  <text x="110" y="40" font-size="24" fill="#222222">Car</text>
  </g>
  </svg>
  </a>
</div>
 <nav id="main-nav">
  <ul class="MenuLinks">
    <li><a href="index.php" title="Página Inicial" class="PaginaInicialNav">Página Inicial</a></li>
    <li><a href="MeuCarro.php" title="Meu Carro">Meu Carro</a></li>
    <li><a href="CadastrarNovoCarro.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
    <li><a href="Manutencao.php" title="Manutenção" >Manutenção</a></li>
    <li><a href="MeusDados.php" title="Meus Dados" target="_blank">Meus Dados</a></li>
  </ul>
</nav>
</div>
<div class="Search">
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
</div>
</header>
<div>
    <center><h2>Seu Carro Favorito</h2></center>
<?php 
$SelectCar -> SearchMarca($Search, $Marca, $Conecta); 
$SelectCar -> MostraCarroSelecionado($Conecta);
?>
<div>
  <h1><?php  $SelectCar -> VerificaSeExisteCarroSelecionado(); ?></h1>
</div>
</div>
<footer>
    <div class="container">
      <p>&copy; 2025 InfoCar. Todos os direitos reservados.</p>
      <nav>
        <a href="#">Sobre</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos de Uso</a>
      </nav>
    </div>
</footer>
</body>
</html>
