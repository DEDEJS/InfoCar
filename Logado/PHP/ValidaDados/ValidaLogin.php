<?php
ini_set('default_charset','UTF-8');

class GetLogin{
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
    public function GetSelect(){
       if(isset($_POST['login-select'])){
         return htmlspecialchars($_POST['login-select']);
        }
    }
}
class ValueLogin extends GetLogin{
      public function ValueEmail(){
        echo $this-> GetEmail();
    }
}
$ValueLogin = new ValueLogin();
class ValidaLogin extends GetLogin{
    public $email;
    public $senha;
    public $select;
    public function ValidaEmail(){
     $Email = $this-> GetEmail();

     if(strlen($Email)<=0){
        echo "Preenche o Campo Email";
     }else if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
       echo "Email Inválido";
    }else{
      return $this->email = true;
    }
   }
   public function ValidaSenha(){
    $Senha = $this-> GetSenha();
    if(strlen($Senha)<=0){
      echo "Preenche o campo Senha";
    }else if(strlen($Senha) <=6){
      return false;
    }else if(strlen($Senha) >= 21){
         return false;
    }else{
       return $this->senha = true;
    }
   }
  /* public function ValidaSelect(){
     $Select = $this->GetSelect();
     $Array_Select = array("---","Empresarial","Gratuito","Pro");
     if($Select == $Array_Select[0]){
        echo "Escolha Uma Opção";
     }else if($Select != $Array_Select[1] && $Select != $Array_Select[2] && $Select != $Array_Select[3]){
        echo "Escolha Uma Opção Válida";
     }else{
        return [$this->select = true, $Select];
     }
   }*/
     public function VerificaLogin(){
      if($this->email == true && $this->senha == true ){
            include_once("Logado/PHP/FunctionsDB/Crud/Select.php");
            include_once("Logado/PHP/Banco/Banco.php");
            $SelectLogin = new SelectLogin();
            $email = $this-> GetEmail();
            $senha = $this-> GetSenha();
            $SelectLogin -> SelectLogin($Conecta, $email, $senha);

           /* $select = $this->GetSelect();
            if($this->GetSelect() == "Empresarial" && $this->GetSelect() != "---"){
            $SelectLogin -> SelectLoginEmpresarial($Conecta, $email, $senha, $select);
            }else if($this->GetSelect() == "Gratuito" && $this->GetSelect() != "---"){
              $SelectLogin -> SelectLoginGratuito($Conecta, $email, $senha);
            }else if($this->GetSelect() == "Pro" && $this->GetSelect() != "---"){
               $SelectLogin -> SelectLoginPro($Conecta, $email, $senha, $select);
            }else{
               return false;
            }*/
            
      }
    } 


 }
$ValidaLogin = new ValidaLogin();
