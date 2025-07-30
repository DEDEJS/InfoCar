<?php
include_once("PHP/Get/GetDadosInputManutencao.php");
class GetDados extends GetDadosInput{
   public  $GetDados;
    public function __construct() {
        $this->GetDados = new GetDadosInput(); 
    }
}

class ValidaCadastroManutencao extends GetDados{
    public $Dados;
  public function __construct() {
       return $this->Dados = new GetDados(); 
    }
    public function ValidaTipoManutencao(){
       $Tipo = $this->Dados -> GetTipoManutencao();
        $ArrayTipo = array('---','Preventiva','Corretiva','Outro');
        if($Tipo == $ArrayTipo[0] && $Tipo != $ArrayTipo['1'] && $Tipo != $ArrayTipo['2']){
         return  "Inválido";
        }else{   
          return $Tipo;        
        }
    }
    public function ValidaPecaManutencao(){
       $Peca = $this->Dados -> GetPeca();
        if(strlen($Peca) <= 0){
         return "Campo Vázio";
        }else if(strlen($Peca) >=51){
           return "Campo Peca Muito Grande";
        }else{
            $this->PecaValidado = true;
        }
    }
    public function PecaValidado(){
      if(isset($this->PecaValidado) && $this->PecaValidado == true){
          return true;
      }else{
        return false;
      }
    }
    public function ValidaPecaCodigoManutencao(){
       $PecaCodigo = $this->Dados -> GetPecaCodigo();
       if(strlen($PecaCodigo)>=1 && !preg_match('/^[A-Z0-9\-_ ]+$/i',$PecaCodigo)){
          return "Campo Inválido";
       }else{
        $this-> PecaCodigoValidado = true;
       }
    }
    public function ValidaFabricantePecaManutencao(){
      $FabricantePecaCodigo = $this->Dados -> GetFabricanteCodigo();
      if(strlen($FabricantePecaCodigo) >= 1 && !preg_match('/^[A-Z0-9\- ]+$/i',$FabricantePecaCodigo)){
         return "Código Inválido, não adicione caracteres especiais";
      }else{
        $this-> FabricanteCodigoValidado = true;
      }
    }
    public function ValidaValorPeca(){
         $ValorPeca = $this->Dados ->GetValorPeca();
        if(strlen($ValorPeca)<= 0){
           return "Campo Vázio";
        }else if(!preg_match('/^R?\$?\s?(\d{1,3}(\.\d{3})*|\d+)(,\d{1,2})?$/', $ValorPeca)){
           return "Campo Inválido";
        }else{
          $this->ValorPeca = true;
        }
    }
    public function ValidaQuantidadePeca(){
         $QuantidadePeca = $this->Dados ->GetQuantidadePeca();
         if(strlen($QuantidadePeca) <= 0){
           return "Campo Vázio";
         }else if(!preg_match('/^R?\$?\s?(\d{1,3}(\.\d{3})*|\d+)(,\d{1,2})?$/', $QuantidadePeca)){
          return "Campo Inválido";
         }
    }
    public function ValorPecaValidado(){
      if(isset($this-> ValorPeca) && $this-> ValorPeca == true){
        return true;
      }else{
        return false;
      }
    }
    public function ValidaMaoDeObra(){
      $MaoDeObra = $this->Dados -> GetMaoDeObra();
      if(strlen($MaoDeObra)<= 0){
         return "Campo Vázio";
      }else if(strlen($MaoDeObra) >= 51){
        return "Campo Muito Grande";
      }else if(!preg_match('/^R?\$?\s?(\d{1,3}(\.\d{3})*|\d+)(,\d{1,2})?$/', $MaoDeObra)){
        return "Campo Inválido";
     }else{
        $this->MaoDeObraValidado = true;
      }
    }
    public function MaodeObraValidado(){
      if(isset( $this->MaoDeObraValidado) && $this->MaoDeObraValidado == true){
        return true;
      }else{
        return false;
      }
    }
    public function ValidaLocalManutencao(){
        $LocalManutencao = $this->Dados -> GetLocalManutencao();
        if(strlen($LocalManutencao)<=0){
          return "Campo Vázio";
        }else if(strlen($LocalManutencao) >= 51){
          return "Campo Muito Grande";
        }else{
            $this-> LocalManutencaoValidado = true;
        }
    }
     public function ValidaDataManutencao(){
       $Data = $this->Dados -> GetData();
        if(strlen($Data) <= 0){
          return  "Campo Vázio";
        }else if($Data > date('Y-m-d')){
         return  "A data de manutenção não pode ser maior que a data atual";
        }else{
            $this->DataManutencaoValidado = true;       
        }
    }
    public function ValidaDataProximaManutencao(){
      $DataProxima = $this->Dados -> GetDataProximaManutencao();
      $Data = $this->Dados -> GetData();
      if(strlen($DataProxima) <= 0){
          return  "Campo Vázio";
        }else if($DataProxima <= date('Y-m-d')){
         return  "A data da próxima manutenção não pode ser menor ou igual que a data atual";
        }else if($DataProxima == $Data){
          return "A data da próxima manutenção não pode ser igual a data da manutenção";
        }else{
        }
    }
    public function DataValidado(){
      if(isset($this->DataManutencaoValidado) && $this->DataManutencaoValidado == true){
        return true;
      }else{
        return false;
      }
    }
       public function ValidaQuilometragem(){
        $Quilometragem = $this->Dados -> GetQuilometragemAtual();
        if(!is_numeric($Quilometragem)){
            return "Quilometragem Inválida";
        }else if(strlen($Quilometragem)>=8){
            return "Quilometragem Inválida";
        }else{
          return $this-> QuilometragemValidado = true;
        }
     }
    public function ValidaObservacaoManutencao(){
      $Observacao = $this->Dados -> GetObservacao();
       if(strlen($Observacao)<=0){
          return "Campo Vázio";
       }else if(strlen($Observacao) >= 301){
         return "Campo Muito Grande";
       }else{
        trim($Observacao);
        $this-> ObservacaoManutencaoValidado = true;
       }
    }
    public function ValidaTipoServico(){
      $TipoServico = $this->Dados -> GetTipoServico();
      $Array_Permitido_Tipo_Servico = array("---","Inspeção De Rotina","Revisão Programada","Pré-Compra","Revisão Pós-Viagem","Outro");
      if($TipoServico == $Array_Permitido_Tipo_Servico['0']){
          return "Escolha Uma Opção";
      }else if($TipoServico != $Array_Permitido_Tipo_Servico['1'] && $TipoServico != $Array_Permitido_Tipo_Servico['2']
      && $TipoServico != $Array_Permitido_Tipo_Servico['3'] && $TipoServico != $Array_Permitido_Tipo_Servico['4'] && 
      $TipoServico != $Array_Permitido_Tipo_Servico['5']){
         return "Inválido";
      }else{
        return $TipoServico;
      }
    }
    public function ValidaStatusManutencao(){
      $Status = $this->Dados -> GetStatus();
      $Array_Permitido_Status = array("---","Trocar","Reparar","substituir","Outro");
      if($Status == $Array_Permitido_Status['0']){
        return "Escolha Uma Opção";
      }else if($Status != $Array_Permitido_Status['1'] && $Status != $Array_Permitido_Status['2']
      && $Status != $Array_Permitido_Status['3'] && $Status != $Array_Permitido_Status['4']){
        return "Inválido";
      }else{
        return $Status;
      }
    }
    public function CadastraManutencao($Tipo, $Peca, $PecaCodigo, $FabricantePecaCodigo, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao){

      include_once("PHP/Banco/banco.php");
      include_once("PHP/FunctionsDB/Crud/Select.php");
      $SelectMaintenance -> VerificaSeManutencaoExiste($Conecta);
           if($this-> TipoValidado == true && $this-> PecaValidado == true && $this->PecaCodigoValidado == true 
            && $this-> FabricanteCodigoValidado == true && $this->ValorPeca == true && $this->MaoDeObraValidado == true && $this->LocalManutencaoValidado  == true &&
             $this-> DataManutencaoValidado  == true && $this-> ObservacaoManutencaoValidado == true ){
                $IdCar = $SelectMaintenance -> GetIdUrl();
                include_once("PHP/FunctionsDB/Crud/Insert.php");
                $InsertMaintence ->InsertMaintenanceDB($Conecta,$IdCar ,$Tipo, $Peca,  $PecaCodigo, $FabricantePecaCodigo, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao);
              } else{
            echo "Termine De Preencher Os Dados";
           }
    }
}
$ValidaCadastroManutencao = new ValidaCadastroManutencao();
