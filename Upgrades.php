<?php
ini_set('default_charset','UTF-8');
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Upgrades</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/FormUpgrade.css">

</head>
<body>
<nav>
 <ul>
  <li><a href="index.php" title="Página Inicial" >Página Inicial</a></li>
  <li><a href="MyCar.php" title="Meu Carro">Meu Carro</a></li>
  <li><a href="CadNewCar.php" title="Cadastrar Novo Carro">Cadastrar Novo Carro</a></li>
  <li><a href="Maintenance.php" title="Manutenção">Manutenção</a></li>
  <li><a href="Upgrades.php" title="Upgrades" class="UpgradesNav">Upgrades</a></li>
 </ul>
</nav>
<header>
   <h3>UPGRADES PARA QUE SERVEM</h3> 
</header>
<main>
<div class="Card">
 <div class="CardConteudo" id="Intake">    
  <h3>INTAKE</h3>
  <p>intake é reduzir a temperatura do ar de admissão, para que o ar mais frio flua para o motor aumentando a eficiência da explosão da mistura de ar/combustível, logo mais potência. </p>
 </div>
</div>

<div class="Card">
 <div class="CardConteudo" id="Remap">  
 <h3>REMAP</h3>
  <p>O remapeamento de carros, ou remap, é um procedimento que altera a programação do computador de bordo do carro, também conhecido como ECU (Engine Control Unit). O objetivo é melhorar a performance do automóvel em velocidade e potência, bem como o desempenho em geral</p>
</div>
</div>
<div class="Card">
 <div class="CardConteudo" id="Escape">  
 <h3>ESCAPAMENTO ESPORTIVO</h3>
  <p>Qual a função do escapamento esportivo? Em comparação ao escapamento convencional, o esportivo tem como função principal melhorar o desempenho do veículo, proporcionar um som mais característico e, em alguns casos, contribuir para um visual mais estilizado</p>
</div>
</div>
<div class="Card">
 <div class="CardConteudo" id="Mola">  
 <h3>MOLA ESPORTIVA</h3>
  <p>As molas esportivas permitem que o carro conte com maior estabilidade, pois seu centro de gravidade é rebaixado. A principal vantagem da mola esportiva está na maior estabilidade para o carro, em virtude do rebaixamento de seu centro de gravidade</p>
</div>
</div>
<div class="Card">
 <div class="CardConteudo" id="Turbina">  
 <h3>TURBINA</h3>
  <p>As turbinas são acessórios que aumentam a performance dos motores. A sua função é restringir a ação do gás de escape do motor numa área da secção transversal de vazão, o que provoca uma queda da pressão e da temperatura</p>
</div>
</div>
<div class="Card">
 <div class="CardConteudo" id="Swap">  
 <h3>SWAP DE MOTOR</h3>
  <p>Um swap de motor, ou troca de motor original por outro modelo, pode ser feito por várias razões:
  </p>
</div>
</div>
<div class="Card">
 <div class="CardConteudo" id="Cambio">  
 <h3>CÂMBIO</h3>
<p>O câmbio, também conhecido como transmissão, é um componente mecânico que transfere a força do motor para as rodas do carro, permitindo que o veículo se movimente em diferentes velocidades e condições de terreno. </p>
</div>
</div>
</main>
<section>
<div class="CardIntake" id="CardIntake">
  <form action="#" method="post">
  <div>
    <h3>Adicionar Intake?</h3>
    <input type="radio" id="Sim" name="AdicionarIntake" value="Sim">
    <label for="Sim">Sim</label>
    <input type="radio" id="Nao" name="AdicionarIntake" value="Não">
    <label for="Nao">Não</label>
  </div>
  <div>
    <h3>Quantos Cavalos Vieram?</h3>
    <input type="text" placeholder="Quantos Cavalos Vieram?" name="CavalosIntake">
  </div>
  <div>
    <h3>Valor Do Intake</h3>
   <input type="text" placeholder="Valor Do Intake" name="PrecoIntake">
  </div>
   <input type="submit" value="Cadastrar">
  </form>
</div>
<div class="CardRemap" id="CardRemap">
 <form action="#" method="POST">
  <div>
    <h3>Adicionar Remap?</h3>
    <input type="radio" id="Sim" name="AdicionarRemap" value="Sim">
    <label for="Sim">Sim</label>
    <input type="radio" id="Nao" name="AdicionarRemap" value="Não">
    <label for="Nao">Não</label>
  </div>
  <div>
    <h3>Quantos Cavalos Vieram?</h3>
    <input type="text" placeholder="Quantos Cavalos Vieram?" name="CavalosRemap">
  </div>
  <div>
    <h3>Valor Do Remap</h3>
   <input type="text" placeholder="Valor Do Remap" name="PrecoRemap">
  </div>
   <input type="submit" value="Cadastrar">
 </form>

</div>
</section>
</body>
</html>
