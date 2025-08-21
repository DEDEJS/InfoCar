<?php
ini_set('default_charset','UTF-8');
class VerificaSeExisteDadosCadastrados{
    public function VerificaCPF($CPF, $Conecta){
       if($CPF != null){
        $SQLCPF = "SELECT  cpf FROM user WHERE cpf = :CPF LIMIT 1";
        $QueryCPF = $Conecta->prepare($SQLCPF);
        $QueryCPF->bindParam(':CPF', $CPF, PDO::PARAM_STR);
        $QueryCPF->execute();
        $UsuarioEncontrado = $QueryCPF->fetch(PDO::FETCH_ASSOC);
      if ($UsuarioEncontrado) {
            return false;
      } else {return true;}
      }
    }
    public function VerificaCNPJ($CNPJ, $Conecta){
      if($CNPJ != null){
         $SQLCNPJ = "SELECT cnpj FROM empresa WHERE cnpj = :CNPJ";
         $QueryCNPJ = $Conecta->prepare($SQLCNPJ);
         $QueryCNPJ->bindParam(':CNPJ', $CNPJ, PDO::PARAM_STR);
         $QueryCNPJ->execute();
         $CNPJEncontrado = $QueryCNPJ->fetch(PDO::FETCH_ASSOC);
         if ($CNPJEncontrado) {
            return false;
      } else {return true;}
      }
    }
    public function VerificaEmail($Email, $Conecta){ 
        if($Email != null){
           $SQLEMAIL = "SELECT Email FROM emailusuarios WHERE Email = :Email LIMIT 1";
           $QueryEmail = $Conecta->prepare($SQLEMAIL);
           $QueryEmail->bindParam(':Email', $Email, PDO::PARAM_STR);
           $QueryEmail->Execute();
           $EmailEncontrado = $QueryEmail->fetch(PDO::FETCH_ASSOC);
           if ($EmailEncontrado) {
            return false;
      } else {return true;}
        }
    }
}
        $VerificaSeExisteDadosDB = new VerificaSeExisteDadosCadastrados();

?>