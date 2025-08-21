<?php
ini_set('default_charset','UTF-8');
session_start();
include_once("Logado/PHP/ValidaDados/ValidaLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - InfoCar</title>
  <link  type="text/css" rel="stylesheet"  href="InfoCarUser/Assets/CSS/Menu.css">
  <link rel="stylesheet" href="InfoCarUser/Assets/CSS/Form.css">
  <script src="InfoCarUser/Assets/JS/Interacao.js"></script>
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
          <li><a href="InfoCarUser/index.php">Página Inicial</a></li>
          <li><a href="InfoCarUser/CadastroGratuito.php">Cadastro Gratuito</a></li>
          <li><a href="InfoCarUser/CadastroPro.php">Cadastro Pró</a></li>
          <li><a href="CadastroEmpresarial.php">Cadastro Empresarial</a></li>
          <li><a href="InfoCarUser/contact">Contato</a></li>
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
  <main class="login">
    <div class="container">
      <h1>Login</h1>
      <form action="#" method="post" class="form-login">
        <label for="email">E-mail <span><?php $ValidaLogin -> ValidaEmail();?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" value="<?php $ValueLogin -> ValueEmail();?>">
        <label for="senha">Senha <span><?php  $ValidaLogin-> ValidaSenha();?></span></label>
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
       <!-- <label for="login-select">Logar Como <span><?php /* $ValidaLogin-> ValidaSelect(); */ ?> </span></label>
        <select name="login-select" id="">
            <option>---</option>
            <option>Empresarial</option>
            <option>Gratuito</option>
            <option>Pro</option>
        </select>-->
        <button type="submit" class="btn-primary">Logar</button>
        <span><?php $ValidaLogin -> VerificaLogin();?></span>
        <p>Novo aqui? <a href="http://localhost/Projects/InfoCarPage/#plans" target="_blank">Escolha um plano</a></p>
      </form>
    </div>
  </main>
</body>


</html>