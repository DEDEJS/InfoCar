<?php
ini_set('default_charset','UTF-8');
class VerificaSeExisteDadosCadastrados{
    public function VerificaCPF($CPF, $Conecta){
       if($CPF != null){
        $SQLCPF = "SELECT  cpf FROM user WHERE cpf = :CPF";
        $QueryCPF = $Conecta->prepare($SQLCPF);
        $QueryCPF->bindParam(':CPF', $CPF, PDO::PARAM_STR);
        $QueryCPF->execute();
        $UsuarioEncontrado = $QueryCPF->fetch(PDO::FETCH_ASSOC);
      if ($UsuarioEncontrado) {
            echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a></span> ';
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
         if ($UsuarioEncontrado) {
            echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a></span> ';
            return false;
      } else {return true;}
      }
    }
    public function VerificaEMAIL($Email, $Conecta){
         $SQLMAIL = "SELECT empresa, pro, user FROM empresa WHERE Email = :EMAIL";
         $QueryEMAIL = $Conecta->prepare($SQLCNPJ);
         $QueryEMAIL->bindParam(':EMAIL', $CNPJ, PDO::PARAM_STR);
         $QueryEMAIL->execute();
         if ($UsuarioEncontrado) {
            echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a></span> ';
            return false;
            die();
      } else {return true;}
    }
}

?>