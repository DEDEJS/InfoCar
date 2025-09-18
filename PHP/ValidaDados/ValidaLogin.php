<?php
ini_set('default_charset','UTF-8');
class ValidateLogin  {
     public function checkLogin($email, $senha){
            include_once("PHP/FunctionsDB/Crud/Select.php");
            include_once("PHP/Banco/Banco.php");
            $SelectLogin = new LoginSelector();
           
            $SelectLogin -> SelectLogin($Connection, $email, $senha);      
    } 


 }
$ValidateLogin = new ValidateLogin();
