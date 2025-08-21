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
  <link rel="stylesheet" href="Logado/Assets/CSS/login.css">
</head>
<body>
  <main class="login">
    <div class="container">
      <h1>Login</h1>
      <form action="#" method="post" class="form-login">
        <label for="email">E-mail <span><?php $ValidaLogin -> ValidaEmail();?></span></label>
        <input type="email" id="email" name="email" placeholder="Email:" value="<?php $ValueLogin -> ValueEmail();?>">
        <label for="senha">Senha <span><?php  $ValidaLogin-> ValidaSenha();?></span></label>
        <input type="password" id="senha" name="senha" placeholder="Senha: ">
        <label for="login-select">Logar Como <span><?php $ValidaLogin-> ValidaSelect(); ?> </span></label>
        <select name="login-select" id="">
            <option>---</option>
            <option>Empresarial</option>
            <option>Gratuito</option>
            <option>Pro</option>
        </select>
        <button type="submit" class="btn-primary">Logar</button>
        <span><?php $ValidaLogin -> VerificaLogin();?></span>
        <p>Novo aqui? <a href="http://localhost/Projects/InfoCarPage/#plans" target="_blank">Escolha um plano</a></p>
      </form>
    </div>
  </main>
</body>
</html>