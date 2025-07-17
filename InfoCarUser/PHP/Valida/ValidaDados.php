<?php
ini_set('default_charset','UTF-8');
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
  public function ValidaCnpj(){
    $cnpj = $this-> GetDados -> GetCNPJ();
    $cnpjValidado = preg_replace('/[^0-9]/', '', $cnpj);

    if (strlen($cnpjValidado) != 14) {
     echo "CNPJ Inválido";
    }else if (preg_match('/(\d)\1{13}/', $cnpjValidado)) {
       echo "CNPJ Inválido";
       return false;
    }else{

    for ($t = 12; $t < 14; $t++) {
        $d = 0;
        $c = 0;
        for ($m = $t - 7, $i = 0; $i < $t; $i++, $m--) {
            $d += $cnpjValidado[$i] * $m;
            if ($m < 2) $m = 9;
        }
        $digito = ((10 * $d) % 11) % 10;
        if ($cnpjValidado[$t] != $digito) {
            echo "CNPJ Inválido";
        }else{
            return [$this-> CNPJ = true, $this->CNPJValue = $cnpjValidado];
        }
    } 
    
 }
  }
  public function ValidaEndereco(){
    $endereco = $this-> GetDados -> GetEndereco();
    if(strlen($endereco) <= 1){
     echo "Endereço Inválido";
    }
  }
  public function ValidaNumeroEndereco(){
    $numero = $this-> GetDados -> GetNumeroEndereco();
    if(strlen($numero) <= 0){
       echo "Preenche o Campo";
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
    $this-> Email == true && $this-> Senha == true && $this-> Telefone == true){
     return   $this->Validado = true; 
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
        $VerificaSeExisteDadosNoDB = new VerificaSeExisteDadosCadastrados();
        if($VerificaSeExisteDadosNoDB->VerificaCPF($CPF, $Conecta) != false
         && $VerificaSeExisteDadosNoDB->VerificaEMAIL($Email, $Conecta) != false){
            $Insert -> InsertGratuito($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta);
        }
        
       }
  }
   public function InsertPro(){
       if($this->Validado == true){
        include_once("PHP/FunctionsDB/CRUD/insert.php");
        include_once("PHP/Banco/Banco.php");
        $Nome =  $this->NomeValue;
        $CPF = $this->CPFValue;
        $Email = $this->EmailValue;
        $Senha = $this->SenhaValue;
        $Telefone = $this->TelefoneValue;
        if($VerificaCrudCpf->VerificaCPF($CPF, $Conecta) != false){
        $Insert -> InsertPro($Nome,$CPF,$Email,$Senha,$Telefone,$Conecta);
        echo "ok";
         }
       }
  }
  public function InsertEmpresarial(){
       if($this->Validado == true){
        include_once("PHP/FunctionsDB/CRUD/insert.php");
        include_once("PHP/Banco/Banco.php");
        $Nome =  $this->NomeValue;
        $CNPJ = $this->CPFValue;
        $Email = $this->EmailValue;
        $Senha = $this->SenhaValue;
        $Telefone = $this->TelefoneValue;
        if($VerificaSeExisteDados->VerificaCPF($CPF, $Conecta) != false){
        $Insert -> InsertEmpresarial($Nome,$CNPJ,$Email,$Senha,$Telefone,$Endereco,$Numero,$Conecta);
        echo "ok";
         }
       }
  }
}

$ValidaDados = new ValidaDados();
?>