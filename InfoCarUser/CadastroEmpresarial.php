<?php
ini_set('default_charset','UTF-8');
include_once("PHP/Banco/banco.php");
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
      <h1>Cadastro Empresarial</h1>
      <p>Crie sua conta e comece a usar o InfoCar Por R$ 49, no primeiro mês</p>
      <form action="#" method="post" class="form-cadastro">
        <label for="nome">Nome da oficina / empresa	 <span><?php $ValidaDados -> ValidaNome(); ?></span></label>
        <input type="text" id="nome" name="nome" placeholder="Nome Da Empresa:" value="<?php $Value -> ValueNome(); ?>">
        <label for="cnpj">CNPJ <span><?php $ValidaDados -> ValidaCNPJ(); ?></span></label>
        <input type="text" id="cnpj" name="cnpj" placeholder="Ex: 55.555.555/5555-55" value="<?php $Value -> ValueCnpj(); ?>">
        <label for="endereco">Endereço <span><?php $ValidaDados -> ValidaEndereco(); ?></span></label>
        <input type="text" id="endereco" name="endereco" placeholder="Ex: Rua " value="<?php $Value -> ValueEndereco(); ?>">
        <label for="numero">Número	 <span><?php $ValidaDados -> ValidaNumeroEndereco(); ?></span></label>
        <input type="text" id="numero" name="numero" placeholder="Número:" value="<?php $Value -> ValueNumeroEndereco(); ?>">
        <label for="telefone">Telefone Comercial <span><?php $ValidaDados -> ValidaTelefone(); ?></span></label>
        <input type="tel" id="telefone" name="telefone"  placeholder="11 99999-9999" value="<?php $Value -> ValueTelefone(); ?>">
        <label for="email">E-mail Comercial <span><?php $ValidaDados -> ValidaEmail(); ?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" > 
        <label for="senha">Senha <span><?php $ValidaDados -> ValidaSenha(); ?></span></label>
        <input type="password" id="senha" name="senha" placeholder="Senha: " >
        <button type="submit" class="btn-primary">Criar Conta</button>
      </form>
      
      <p class="info">Ao criar sua conta, você estará automaticamente no plano Empresarial.</p>
    </div>
  </main>
</body>
</html>