<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Get/GetDadosInput.php");

include_once("PHP/ValidaDados/ValidaManutencao.php");
include_once("PHP/ValidaDados/ValidaCadastro.php");

include_once("PHP/ValidaDados/ValidaUpdate.php");

include_once("PHP/Banco/banco.php");
include_once("PHP/FunctionsDB/Crud/Update.php");
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Manutenção</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<link rel="stylesheet" href="../InfoCarUser/Assets/CSS/Cadastro.css">
</head>
<body>
<main class="Cadastro">
  <div class="container">
   <form action="#" method="post" class="form-cadastro">
   <?php 
    $ShowInput -> Input($Alterar,$ValidaCadastroManutencao,$ValidaCadastro,$Quilometragem);
   ?>
    </form>
   </div>
</main>
<?php

$AlterarDados ->  AlterarDados($Alterar,$IdAlterarManutencao,$IdAlterarCarro,$Conecta,$ValidaCadastroManutencao,$ValidaCadastro);  
?>
</body>
</html>
