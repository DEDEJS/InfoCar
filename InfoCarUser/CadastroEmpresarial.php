<?php
ini_set('default_charset','UTF-8');
include_once("../PHP/ValidaDados/ValidaForm.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - InfoCar</title>
  <link rel="stylesheet" href="Assets/CSS/Form.css">
  <link  type="text/css" rel="stylesheet"  href="Assets/CSS/Menu.css">
  <script src="../JS/Interacao.js"></script>
  <script src="../JS/ValidaForm.js"></script>
</head>
<body>
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
      <nav id="main-nav">
        <ul class="MenuLinks">
          <li><a href="index.php" >Página Inicial</a></li>
          <li><a href="CadastroGratuito.php">Cadastro Gratuito</a></li>
          <li><a href="CadastroPro.php">Cadastro Pró</a></li>
          <li><a href="CadastroEmpresarial.php">Cadastro Empresarial</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav>
       <button class="menu-toggle" aria-label="Abrir menu">
      <svg width="30" height="24" viewBox="0 0 40 30" xmlns="http://www.w3.org/2000/svg">
        <rect y="0" width="40" height="4" rx="2" fill="#333"/>
        <rect y="12" width="40" height="4" rx="2" fill="#333"/>
        <rect y="24" width="40" height="4" rx="2" fill="#333"/>
      </svg>
    </button>
    </div>
</header>
  <main class="cadastro">
    <div class="container">
      <h1>Cadastro Empresarial</h1>
      <p>Crie sua conta e comece a usar o InfoCar Por R$ 49, no primeiro mês</p>
      <form action="#" method="post" class="form-cadastro" onclick="return ValidaCadastroEmpresarial();">
        <label for="nome">Nome da oficina / empresa	 <span><?php $ValidaDados -> ValidaNome(); ?></span></label>
        <input type="text" id="nome" name="nome" placeholder="Nome Da Empresa:" value="<?php $Value -> ValueNome(); ?>">
        <label for="cnpj">CNPJ <span><?php $ValidaDados -> ValidaCNPJ(); ?></span></label>
        <input type="text" id="cnpj" name="cnpj" placeholder="Ex: 55.555.555/5555-55" value="<?php $Value -> ValueCnpj(); ?>">
        <label for="endereco">Endereço <span><?php $ValidaDados -> ValidaEndereco(); ?></span></label>
        <input type="text" id="endereco" name="endereco" placeholder="Ex: Rua " value="<?php $Value -> ValueEndereco(); ?>">
        <label for="numero">Número	<span><?php $ValidaDados -> ValidaNumeroEndereco(); ?></span></label>
        <input type="number" id="numero" name="numero" placeholder="Número:" value="<?php $Value -> ValueNumeroEndereco(); ?>">
        <label for="telefone">Telefone Comercial <span><?php $ValidaDados -> ValidaTelefone(); ?></span></label>
        <input type="tel" id="telefone" name="telefone"  placeholder="11 99999-9999" value="<?php $Value -> ValueTelefone(); ?>">
        <label for="email">E-mail Comercial <span><?php $ValidaDados -> ValidaEmail(); ?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" value="<?php $Value -> ValueEmail(); ?>"> 
        <label for="senha">Senha <span><?php $ValidaDados -> ValidaSenha(); ?></span></label>
         <div class="input-wrapper" onclick="return ShowPassword();">  
          <input type="password" id="senha" name="senha" placeholder="Senha: ">
          <!-- Ícone olho -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                id="toggleSenha">
              <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
      </div>
        <button type="submit" class="btn-primary" name="button" id="button">Criar Conta</button>
      </form>
      <?php 
      $ValidaDados -> VerificaCadastroEmpresarial();
        $ValidaDados -> InsertEmpresarial();
      ?>
      <p class="info">Ao criar sua conta, você estará automaticamente no plano Empresarial.</p>
    </div>
  </main>
</body>
</html>