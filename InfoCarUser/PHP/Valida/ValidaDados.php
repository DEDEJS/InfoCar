<?php
ini_set('default_charset','UTF-8');
date_default_timezone_set('America/Sao_Paulo');
class GetDados{
     public function GetNome(){
        if(isset($_POST['nome'])){
            return htmlspecialchars($_POST['nome']);
        }
    }
    public function GetCnpj(){
        if(isset($_POST['cnpj'])){
            return htmlspecialchars($_POST['cnpj']);
        }
    }
    public function GetEndereco(){
          if(isset($_POST['endereco'])){
            return htmlspecialchars($_POST['endereco']);
        }
    }
     public function GetNumeroEndereco(){
          if(isset($_POST['numero'])){
            return htmlspecialchars($_POST['numero']);
        }
    }
     public function GetCpf(){
       if(isset($_POST['cpf'])){
            return htmlspecialchars($_POST['cpf']);
        }
    }
    public function GetEmail(){
       if(isset($_POST['email'])){
            return htmlspecialchars($_POST['email']);
        }
    }
  
       public function GetSenha(){
       if(isset($_POST['senha'])){
            return htmlspecialchars($_POST['senha']);
        }
    }
    public function GetTelefone(){
       if(isset($_POST['telefone'])){
            return htmlspecialchars($_POST['telefone']);
        }
    }
}
class DadosValueInput extends GetDados{
    public $Value;
    public function __construct(){
        $this-> Value = new GetDados();
    }
    public function ValueNome(){
        echo $this->Value -> GetNome();
    }
    public function ValueEmail(){
        echo $this->Value -> GetEmail();
    }
   
    public function ValueCpf(){
        echo $this->Value -> GetCpf();
    } 
    public function ValueCnpj(){
        echo $this->Value -> GetCnpj();
    }   
    public function ValueEndereco(){
        echo $this->Value -> GetEndereco();
    }
    public function ValueNumeroEndereco(){
        echo $this->Value -> GetNumeroEndereco();
    }
    public function ValueTelefone(){
        echo $this->Value -> GetTelefone();
    }    
    
}
$Value = new DadosValueInput();
class ValidaDados extends GetDados{
    public $GetDados;
    public $Nome;
    public $CPF;
    public $CNPJ;
    public $Email;
    public $Senha;
    public $Endereco;
    public $EnderecoNumero;
    public $Telefone;
    public $NomeValue;
    public $CPFValue;
    public $CNPJValue;
    public $EmailValue;
    public $SenhaValue;
    public $TelefoneValue;
    public $EnderecoValue;
    public $EnderecoNumeroValue;

    public $Validado;
 public function __construct(){
    $this-> GetDados = new GetDados();
 }
 public function ValidaNome(){
    $nome = $this-> GetDados -> GetNome();
    if(strlen($nome)<=2 || strlen($nome) >= 50){
        echo "Nome Inválido";
    }else if(!preg_match("/^[\p{L} ]+$/u", $nome)){
        echo "Nome Inválido";
    }else{
        return [$this-> Nome = true,$this->NomeValue =  $nome];
    }
 } 
function validaCnpj() {
    $cnpj = $this->GetDados->GetCNPJ();
    $cnpj = preg_replace('/\D/', '', $cnpj);

    if (strlen($cnpj) != 14) {
        echo "CNPJ Inválido1";
        return false;
    } else if (preg_match('/(\d)\1{13}/', $cnpj)) {
        echo "CNPJ Inválido2";
        return false;
    } else {
        for ($t = 12; $t < 14; $t++) {
            $d = 0;
            for ($m = $t - 7, $i = 0; $i < $t; $i++) {
                $d += $cnpj[$i] * $m;
                $m--;
                if ($m < 2) {
                    $m = 9;
                }
            }
            $digito = ((10 * $d) % 11) % 10;
            if ((int)$cnpj[$t] !== $digito) {
                echo "CNPJ Inválido3";
                return false;
            }
        }

        // Só chega aqui se os dois dígitos forem válidos
        
        return [$this->CNPJ = true, $this->CNPJValue = $cnpj];
    }
}


  public function ValidaEndereco(){
    $endereco = $this-> GetDados -> GetEndereco();
    if(strlen($endereco) <= 1){
     echo "Endereço Inválido";
    }else{
        return [$this->Endereco = true, $this->EnderecoValue = $endereco];
    }
  }
  public function ValidaNumeroEndereco(){
    $NumeroEndereco = $this-> GetDados -> GetNumeroEndereco();
    if(strlen($NumeroEndereco) <= 0){
       echo "Preenche o Campo";
    }else if(!is_numeric($NumeroEndereco)){
       echo "Número Inválido";
    }else{
        return [$this->EnderecoNumero = true, $this->EnderecoNumeroValue = $NumeroEndereco];
    }
}
public function validaCpf(){
    $cpf = $this-> GetDados -> GetCpf();
     $cpfValidado = preg_replace('/\D/', '', $cpf);

    if (strlen($cpfValidado) != 11 || preg_match('/(\d)\1{10}/', $cpfValidado)) {
        echo "CPF Inválido";
        return false;
    }else{ 
        return  [$this-> CPF = true, $this->CPFValue = $cpfValidado];  
    }
     }
 public function ValidaEmail(){
    $email = $this-> GetDados -> GetEmail();
    if(strlen($email)<= 0){
       echo "Preenche o campo email";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       echo "Email Inválido";
    }else{
       return [$this->Email = true, $this->EmailValue = $email];
    }
 }


 public function ValidaSenha(){
    $senha = $this-> GetDados -> GetSenha();
    if(strlen($senha) <=6){
      echo "A Senha deve ter no minímo 7 caracteres e no máximo 20 caracteres";
    }else if(strlen($senha) >= 21){
      echo "A Senha deve ter no minímo 7 caracteres e no máximo 20 caracteres";
    }else{
       return [$this->Senha = true, $this->SenhaValue = $senha];
    }
 }
 public function ValidaTelefone(){
   $telefone = $this-> GetDados -> GetTelefone();
   if(!preg_match("/^(\d{10}|\d{11})$/", $telefone)){
        echo "Telefone Inválido";
   }else{
      return [$this->Telefone = true, $this-> TelefoneValue = $telefone];
   }
 }
  public function VerificaCadastroProEGratuito(){
     if($this-> Nome == true && $this-> CPF == true && $this-> Email == true 
     && $this-> Senha == true && $this-> Telefone == true){
     return   $this->Validado = true; 
     }else{
          echo "<span>Preencha os campos restantes</span>";
     }
  }
  public function VerificaCadastroEmpresarial(){
    if($this-> Nome == true && $this-> CNPJ == true && $this->Endereco == true && 
    $this-> EnderecoNumero == true && $this-> Email == true && $this-> Senha == true &&
     $this-> Telefone == true){
     return   $this->Validado = true; 
     }else{
        var_dump($this-> Endereco);
     }
  }
  public function InsertGratuito(){
       if($this->Validado == true){
        include_once("PHP/FunctionsDB/CRUD/insert.php");
        include_once("PHP/FunctionsDB/CRUD/Select.php");
        include_once("PHP/Banco/Banco.php");
        $Nome =  $this->NomeValue;
        $CPF = $this->CPFValue;
        $Email = $this->EmailValue;
        $Senha = $this->SenhaValue;
        $Telefone = $this->TelefoneValue;
        if($VerificaSeExisteDadosDB -> VerificaEmail($Email, $Conecta) != false && 
        VerificaCPF($CPF, $Conecta)){
            $Insert -> InsertGratuito($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta);
        }else{
            echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a></span> ';
        }
        
       }
  }
   public function InsertPro(){
       if($this->Validado == true){
        include_once("PHP/Banco/Banco.php");
        include_once("PHP/FunctionsDB/CRUD/Select.php");
        $Nome =  $this->NomeValue;
        $CPF = $this->CPFValue;
        $Email = $this->EmailValue;
        $Senha = $this->SenhaValue;
        $Telefone = $this->TelefoneValue;
        if($VerificaSeExisteDadosDB -> VerificaEmail($Email, $Conecta) != false  && 
        $VerificaSeExisteDadosDB->VerificaCPF($CPF, $Conecta) != false){
        include_once("PHP/FunctionsDB/CRUD/insert.php");
        $Insert -> InsertPro($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta);
         }else{
            echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a></span> ';
         }
       }
  }
  public function InsertEmpresarial(){
       if($this->Validado == true){
        include_once("PHP/Banco/Banco.php");
        include_once("PHP/FunctionsDB/CRUD/Select.php");
        $Nome =  $this->NomeValue;
        $CNPJ = $this->CNPJValue;
        $Email = $this->EmailValue;
        $Senha = $this->SenhaValue;
        $Telefone = $this->TelefoneValue;
        $Endereco = $this->EnderecoValue;
        $Numero = $this->EnderecoNumeroValue;
        if($VerificaSeExisteDadosDB->VerificaEmail($Email, $Conecta) == false){
         echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http:localhost/Projects/InfoCar/login.php">Logar</a>
         Se for alterar o plano é só logar na conta e ir em meus dados</span> ';
        }else if($VerificaSeExisteDadosDB->VerificaCNPJ($CNPJ, $Conecta) == false){
       echo '<span>Usuário já cadastrado, deseja logar nele? <a href="http://localhost/Projects/InfoCar/login.php">Logar</a>
         Se for alterar o plano é só logar na conta e ir em meus dados</span> ';
         }else{
            include_once("PHP/FunctionsDB/CRUD/insert.php");
            $Insert -> InsertEmpresarial($Nome,$CNPJ,$Email,$Senha,$Telefone,$Endereco,$Numero,$Conecta);
         }
       }
  }
}

$ValidaDados = new ValidaDados();
?>