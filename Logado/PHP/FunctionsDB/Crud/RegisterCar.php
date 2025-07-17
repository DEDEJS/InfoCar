<?php
/*ini_set('default_charset','UTF-8');
session_start();
include_once("../../Banco/Banco.php");
class VerificaCadastro{
    private $VefificaSession;
    
    public function VeficicaSessionCadastro(){
        if(isset($_SESSION['placa']) && isset($_SESSION['marca']) && isset($_SESSION['modelo'])){
              $this->VefificaSession = true;
             
        }else{
           die("Error");
        }
    }
    public function VerificaSeExistePlacaNoDB($Conecta){
        if($this->VefificaSession == true){ 
        include_once("Select.php");
       if($SelectCar -> SelectThePlateForRegistration($Conecta) == true){
             echo "true";
       }else{
        include_once("Insert.php");
        $Insert -> InsertCar($Conecta);
       }
      
       }
    }
}
$VerificaCadastro = new VerificaCadastro();
$VerificaCadastro -> VeficicaSessionCadastro();
$VerificaCadastro -> VerificaSeExistePlacaNoDB($Conecta);


if(isset($_SESSION['placa']) && isset($_SESSION['marca']) && isset($_SESSION['modelo'])){
include_once("Select.php");
if($SelectCar-> SelectThePlateForRegistration($Conecta) == true){
    echo "Essa Placa Já Existe";
}else{
include_once("Insert.php");
$Insert -> InsertCar($Conecta);
 }
}else{
    echo "error";
}
*/
?>