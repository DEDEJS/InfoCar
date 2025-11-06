<?php
ini_set('default_charset','UTF-8');
include_once("../PHP/ValidaDados/ValidaForm.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Language" content="pt-br">
  <meta name="description" content="Sistema De Registro De Manutenções Veiculares, Tanto Para Oficinas, Tanto Para Os Proprietários">
  <title>InfoCar - Contato</title>
   <link rel="stylesheet" href="../assets/CSS/Form.css">
  <link  type="text/css" rel="stylesheet"  href="Assets/CSS/index.css">
  <link  type="text/css" rel="stylesheet"  href="../assets/CSS/Menu.css">
    <link rel="stylesheet" href="../assets/CSS/Footer.css">
  <script src="../JS/ValidaForm.js"></script>
  <script src="../JS/Interacao.js"></script>
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
          <li><a href="index.php#features" target="_blank">Funcionalidades</a></li>
          <li><a href="index.php#plans" target="_blank">Planos</a></li>
          <li><a href="index.php#clients" target="_blank">Para quem é</a></li>
          <li><a href="index.php#faq" target="_blank">FAQ</a></li>
          <li><a href="Contato.php">Contato</a></li>
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
<main class="contato">
 <div class="container">
  <h1>Contato</h1>
   <form action="#" method="post" class="form-contato" onclick="return ValidateContact();">
        <label for="NomeCompleto">Nome Completo	<span id="ErrorNome"><?php $ValidateForm-> ValidateFullName(); ?></span></label>
        <input type="text" id="NomeCompleto" name="NomeCompleto" placeholder="Nome Completo" value="<?php ValueDisplay::ShowFullName();  ?>">
        <label for="email">Email <span><?php $ValidateForm -> validateEmail(); ?></span></label>
        <input type="email" id="email" name="email" placeholder="Email" value="<?php ValueDisplay::showEmail(); ?>">
        <label for="telefone">Telefone <span><?php $ValidateForm -> validatePhone(); ?></span></label>
        <input type="tel" id="telefone" name="telefone" placeholder="Telefone" value="<?php ValueDisplay::showPhone(); ?>">
        <label for="assunto">Assunto <span><?php $ValidateForm -> ValidateSubject(); ?></span></label>
        <select id="assunto" name="assunto" required="true">
          <option>Selecione um assunto</option>
          <option>Dúvida sobre cadastro de veículo</option>
          <option>Problema ao registrar manutenção</option>
          <option>Erro no sistema / bug</option>
          <option>Sugestão de melhoria</option>
          <option>Solicitação de nova funcionalidade</option>
          <option>Atualização de dados do usuário</option>
          <option>Integração com oficinas</option>
          <option>Parcerias ou uso comercial</option>
          <option>Outros assuntos</option>
        </select>
        <label for="mensagem">Mensagem <span><?php $ValidateForm -> ValidateMesage(); ?></span></label>
        <textarea name="mensagem" id="mensagem" class="mensagem" placeholder="Mensagem" rows="5">
            <?php ValueDisplay::showMessage(); ?>
        </textarea>
        <button type="submit" class="btn-primary" name="button" id="button">Entrar em Contato</button>

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