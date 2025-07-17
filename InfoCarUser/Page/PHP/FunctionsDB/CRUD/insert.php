<?php
ini_set('default_charset','UTF-8');
class GetDadosProEGratuito {
     
    public function InsertGratuito($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta){
        date_default_timezone_set('America/Sao_Paulo');
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
       $Insert = $Conecta->prepare('INSERT INTO user (Nome, Email, Senha, Telefone, Status, Data, Cpf) 
       VALUES(:Nome, :Email, :Senha, :Telefone, :Status, :Data, :Cpf)');
       $Insert->execute(array(
       ':Nome' => $Nome,
       ':Email' => $Email,
       ':Senha' => $Senha,
       ':Telefone' => $Telefone,
       ':Status' => "1",
       ':Data' => date('Y-m-d H:i:s'),
       ':Cpf' => $CPF
      ));
      echo "cadastrado";
    }
        public function InsertPro($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta){
        date_default_timezone_set('America/Sao_Paulo');
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
       $Insert = $Conecta->prepare('INSERT INTO user (Nome, Email, Senha, Telefone, Status, Data, Cpf) 
       VALUES(:Nome, :Email, :Senha, :Telefone, :Status, :Data, :Cpf)');
       $Insert->execute(array(
       ':Nome' => $Nome,
       ':Email' => $Email,
       ':Senha' => $Senha,
       ':Telefone' => $Telefone,
       ':Status' => "2",
       ':Data' => date('Y-m-d H:i:s'),
       ':Cpf' => $CPF
      ));
    }
        public function InsertEmpresarial($Nome,$CNPJ,$Email,$Senha,$Telefone,$Endereco,$Numero,$Conecta){
        date_default_timezone_set('America/Sao_Paulo');
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
       $Insert = $Conecta->prepare('INSERT INTO empresa (Nome, Email, Senha, Telefone, Status, Data, Cnpj, Endereco, Numero) 
       VALUES(:Nome, :Email, :Senha, :Telefone, :Status, :Data, :Cnpj, :Endereco, :Numero)');
       $Insert->execute(array(
       ':Nome' => $Nome,
       ':Email' => $Email,
       ':Senha' => $Senha,
       ':Telefone' => $Telefone,
       ':Status' => "2",
       ':Data' => date('Y-m-d H:i:s'),
       ':Cnpj' => $CNPJ,
       ':Endereco' => $Endereco,
       ':Numero' => $Numero
      ));
    }
}
$Insert = new GetDadosProEGratuito();
?>