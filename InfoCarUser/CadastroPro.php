<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Valida/ValidaDados.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - InfoCar</title>
  <link rel="stylesheet" href="Assets/CSS/Cadastro.css">
</head>
<body>
  <main class="cadastro">
    <div class="container">
      <h1>Cadastro Mensal R$ 8</h1>
      <p>Crie sua conta e comece a usar o InfoCar Por R$ 8 mensal</p>
      <form action="#" method="post" class="form-cadastro">
        <label for="nome">Nome completo <span><?php $ValidaDados -> ValidaNome(); ?></span></label>
        <input type="text" id="nome" name="nome" placeholder="Nome:" value="<?php $Value -> ValueNome(); ?>">
        <label for="email">CPF <span><?php $ValidaDados -> ValidaCpf(); ?></span></label>
        <input type="text" id="cpf" name="cpf" placeholder="Ex: 55555555555" max="11" value="<?php $Value -> ValueCpf(); ?>">
        <label for="email">E-mail <span><?php $ValidaDados -> ValidaEmail(); ?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" value="<?php $Value -> ValueEmail(); ?>">
          <label for="senha">Senha <span><?php $ValidaDados -> ValidaSenha(); ?></span></label>
        <input type="password" id="senha" name="senha" placeholder="Senha: ">
        <label for="telefone">Telefone  <span><?php $ValidaDados -> ValidaTelefone(); ?></span></label>
        <input type="tel" id="telefone" name="telefone"  placeholder="(11) 99999-9999" value="<?php $Value -> ValueTelefone(); ?>"><!-- pattern="\(\d{2}\) \d{4,5}-\d{4}" -->
        <button type="submit" class="btn-primary">Criar Conta</button>
        <?php 
        $ValidaDados -> VerificaCadastroProEGratuito();
        $ValidaDados -> InsertPro();
        ?>
      </form>
      
      <p class="info">Ao criar sua conta, você estará automaticamente no plano Pro.</p>
    </div>
  </main>
</body>
</html>