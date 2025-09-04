<?php
ini_set('default_charset','UTF-8');

class ValidaLogin  {
     public function VerificaLogin($email, $senha){
            include_once("PHP/FunctionsDB/Crud/Select.php");
            include_once("PHP/Banco/Banco.php");
            $SelectLogin = new SelectLogin();
           
            $SelectLogin -> SelectLogin($Conecta, $email, $senha);      
    } 


 }
$ValidaLogin = new ValidaLogin();
