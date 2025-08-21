<?php
ini_set('default_charset','UTF-8');
session_start();
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrado</title>
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/index.css">

</head>
<body>

   <main>
     <?php 
         if(isset($_SESSION['Cadastrado']) && $_SESSION['Cadastrado'] == true){
              echo "Cadastrado";
              if(time() > $_SESSION['Cadastrado']){
                  unset($_SESSION['Cadastrado']);
                  header("location:../index.php");
                  exit();
              }
         }else{
          header("location:../index.php");
          exit();
         }
         
     ?>
   </main>
</body>
</html>
