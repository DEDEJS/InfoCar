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
  <link rel="stylesheet" href="../assets/CSS/Form.css">
  <link  type="text/css" rel="stylesheet"  href="../assets/CSS/Menu.css">
  <link rel="stylesheet" href="../assets/CSS/Footer.css">
  <script src="../JS/Interacao.js"></script>
  <script src="../JS/ValidaForm.js"></script>
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
      <h1>Cadastro Mensal R$ 8</h1>
      <p>Crie sua conta e comece a usar o InfoCar Por R$ 8 mensal</p>
      <form action="#" method="post" class="form-cadastro" onclick="return ValidaCadastroPro();">
        <label for="nome">Nome completo <span><?php $ValidateForm -> ValidateName(); ?></span></label>
        <input type="text" id="nome" name="nome" placeholder="Nome:" value="<?php ValueDisplay::showName(); ?>">
        <label for="email">CPF <span><?php $ValidateForm -> ValidaTeCpf(); ?></span></label>
        <input type="text" id="cpf" name="cpf" placeholder="Ex: 55555555555" max="11" value="<?php ValueDisplay::showCpf(); ?>">
        <label for="email">E-mail <span><?php $ValidateForm -> ValidateEmail(); ?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" value="<?php ValueDisplay::showEmail(); ?>">
        <label for="senha">Senha <span><?php $ValidateForm -> ValidatePassword(); ?></span></label>
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
        <label for="telefone">Telefone  <span><?php $ValidateForm -> ValidatePhone(); ?></span></label>
        <input type="tel" id="telefone" name="telefone"  placeholder="(11) 99999-9999" value="<?php ValueDisplay::showPhone(); ?>"><!-- pattern="\(\d{2}\) \d{4,5}-\d{4}" -->
        <button type="submit" class="btn-primary" value="button" id="button" name="button">Criar Conta</button>
        <?php 
        $Insert -> InsertPro();
        ?>
      </form>
      
      <p class="info">Ao criar sua conta, você estará automaticamente no plano Pro.</p>
    </div>
  </main>
  
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