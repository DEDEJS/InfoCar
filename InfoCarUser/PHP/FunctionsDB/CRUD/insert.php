<?php
ini_set('default_charset','UTF-8');
class GetDadosProEGratuito {
     
    public function InsertGratuito($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta){
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
      try{
        $Conecta -> beginTransaction();
        $InsertGratuitoUser = $Conecta ->prepare('INSERT INTO user (Nome, Senha, Telefone, Data, Cpf)
          VALUES(:Nome, :Senha, :Telefone, :Data, :Cpf)');
          $InsertGratuitoUser->execute(array(
        ':Nome' => $Nome,
        ':Senha' => $Senha,
        ':Telefone' => $Telefone,
        ':Data' => date('Y-m-d H:i:s'),
        ':Cpf' => $CPF
          ));
          $IdUltimoCadastroUser = $Conecta->lastInsertId();// pega o último id que foi cadastrado
          $InsertGratuitoEmail = $Conecta ->prepare('INSERT INTO emailusuarios (Email, TipoCadastro, IdCadastro) 
          VALUES (:Email, :TipoCadastro, :IdCadastro)');
          $InsertGratuitoEmail->execute(array(
        ':Email' => $Email,
        ':TipoCadastro' => "gratuito",
        ':IdCadastro' => $IdUltimoCadastroUser
          ));
          $Conecta->commit();
          echo "Cadastrado com sucesso";
          }catch (Exception $e) {
           $Conecta->rollBack();
           echo "Erro: " . $e->getMessage();
          } 
    }
        public function InsertPro($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta){
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
        try {
         $Conecta -> beginTransaction();
         $InsertProUser = $Conecta->prepare('INSERT INTO pro (Nome,  Senha, Telefone, Data, Cpf) 
          VALUES(:Nome, :Senha, :Telefone, :Data, :Cpf)');
          $InsertProUser->execute(array(
          ':Nome' => $Nome,
          ':Senha' => $Senha,
          ':Telefone' => $Telefone,
          ':Data' => date('Y-m-d H:i:s'),
          ':Cpf' => $CPF
          )); 
          $IdUltimoCadastroUser = $Conecta->lastInsertId();
          $InsertProEmail = $Conecta ->prepare('INSERT INTO emailusuarios (Email, TipoCadastro, IdCadastro) 
          VALUES (:Email, :TipoCadastro, :IdCadastro)');
          $InsertProEmail->execute(array(
        ':Email' => $Email,
        ':TipoCadastro' => "pro",
        ':IdCadastro' => $IdUltimoCadastroUser
          ));
          $Conecta->commit();
          echo "Cadastrado com sucesso";
        } catch (Exception $e) {
           $Conecta->rollBack();
           echo "Erro: " . $e->getMessage();
          }                   
    }
        public function InsertEmpresarial($Nome,$CNPJ,$Email,$Senha,$Telefone,$Endereco,$Numero,$Conecta){
        $data = new DateTime();$data = new DateTime();
        $Senha =  password_hash($Senha, PASSWORD_DEFAULT);
        try{
          $Conecta -> beginTransaction();
          $InsertEmpresarial = $Conecta->prepare('INSERT INTO empresa (Nome, Senha, Telefone, Data, Cnpj, Endereco, Numero) 
          VALUES(:Nome, :Senha, :Telefone, :Data, :Cnpj, :Endereco, :Numero)');
          $InsertEmpresarial->execute(array(
          ':Nome' => $Nome,
          ':Senha' => $Senha,
          ':Telefone' => $Telefone,
          ':Data' => date('Y-m-d H:i:s'),
          ':Cnpj' => $CNPJ,
          ':Endereco' => $Endereco,
          ':Numero' => $Numero
          ));
         $IdUltimoCadastroUser = $Conecta->lastInsertId();
          $InsertEmpresarilEmail = $Conecta ->prepare('INSERT INTO emailusuarios (Email, TipoCadastro, IdCadastro) 
          VALUES (:Email, :TipoCadastro, :IdCadastro)');
          $InsertEmpresarilEmail->execute(array(
        ':Email' => $Email,
        ':TipoCadastro' => "empresarial",
        ':IdCadastro' => $IdUltimoCadastroUser
          ));
          $Conecta->commit();
          echo "Cadastrado com sucesso";
        }catch(Exception $e){
           $Conecta->RollBack();
           echo "Erro: " . $e->getMessage();
        }
    
    }
}
$Insert = new GetDadosProEGratuito();
?>