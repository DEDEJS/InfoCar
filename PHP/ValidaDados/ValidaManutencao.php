<?php
include_once("PHP/Get/GetCadastroManutencao.php");
$Tipo = $GetCadastroManutencao ->GetTipoManutencao();
$Peca = $GetCadastroManutencao ->GetPeca();
$PecaCodigo = $GetCadastroManutencao ->GetPecaCodigo();
$FabricantePecaCodigo = $GetCadastroManutencao ->GetFabricanteCodigo();
$ValorPeca = $GetCadastroManutencao ->GetValorPeca();
$MaoDeObra = $GetCadastroManutencao ->GetMaoDeObra();
$LocalManutencao = $GetCadastroManutencao ->GetLocalManutencao();
$Data = $GetCadastroManutencao ->GetData();
$Observacao = $GetCadastroManutencao ->GetObservacao();
class ValidaCadastroManutencao{
    private $TipoValidado;
    private $PecaValidado;
    private $PecaCodigoValidado;
    private $FabricanteCodigoValidado;
    private $ValorPeca;
    private $MaoDeObraValidado;
    private $LocalManutencaoValidado;
    private $DataManutencaoValidado;
    private $ObservacaoManutencaoValidado;
 
    public function ValidaTipoManutencao($Tipo){
        $ArrayTipo = array(
            "---",
            "Elétrica",
            "Motor",
            "Suspensão",
            "Outro"
        );
        if($Tipo == $ArrayTipo[0]){
          echo "Escolha Uma Opção";
        }else if($Tipo != $ArrayTipo['1'] && $Tipo != $ArrayTipo['2'] && $Tipo != $ArrayTipo['3'] &&
         $Tipo != $ArrayTipo['4']){
          echo "Inválido";
        }else{
            $this->TipoValidado = true;
        }
    }
    public function ValidaPecaManutencao($Peca){
        if(strlen($Peca) <= 0){
         echo "Campo Vázio";
        }else if(strlen($Peca) >=51){
           echo "Campo Peca Muito Grande";
        }else{
            $this->PecaValidado = true;
        }
    }
    public function PecaValidado(){
      if($this->PecaValidado == true){
          return true;
      }else{
        return false;
      }
    }
    public function ValidaPecaCodigoManutencao($PecaCodigo){
       if(strlen($PecaCodigo)<=0){
          echo "Campo Vázio";
       }else if(!preg_match('/^[A-Z0-9\-_ ]+$/i',$PecaCodigo)){
          echo "Inválido";
       }else{
        $this-> PecaCodigoValidado = true;
       }
    }
    public function ValidaFabricantePecaManutencao($FabricantePecaCodigo){
      if(strlen($FabricantePecaCodigo) <= 0){
         echo "Campo Vázio";
      }else if(!preg_match('/^[A-Z0-9\- ]+$/i',$FabricantePecaCodigo)){
        echo "Código Inválido, não adicione caracteres especiais";
      }else{
        $this-> FabricanteCodigoValidado = true;
      }
    }
    public function ValidaValorPeca($ValorPeca){
        if(strlen($ValorPeca)<= 0){
           echo "Campo Vázio";
        }else if(!preg_match('/^R?\$?\s?(\d{1,3}(\.\d{3})*|\d+)(,\d{1,2})?$/', $ValorPeca)){
           echo "Campo Inválido";
        }else{
          $this->ValorPeca = true;
        }
    }
    public function ValorPecaValidado(){
      if($this-> ValorPeca == true){
        return true;
      }else{
        return false;
      }
    }
    public function ValidaMaoDeObra($MaoDeObra){
      if(strlen($MaoDeObra)<= 0){
         echo "Campo Vázio";
      }else if(strlen($MaoDeObra) >= 51){
        echo "Campo Muito Grande";
      }else if(!preg_match('/^R?\$?\s?(\d{1,3}(\.\d{3})*|\d+)(,\d{1,2})?$/', $MaoDeObra)){
        echo "Campo Inválido";
     }else{
        $this->MaoDeObraValidado = true;
      }
    }
    public function MaodeObraValidado(){
      if($this->MaoDeObraValidado == true){
        return true;
      }else{
        return false;
      }
    }
    public function ValidaLocalManutencao($LocalManutencao){
        if(strlen($LocalManutencao)<=0){
          echo "Campo Vázio";
        }else if(strlen($LocalManutencao) >= 51){
          echo "Campo Muito Grande";
        }else{
            $this-> LocalManutencaoValidado = true;
        }
    }
    public function ValidaDataManutencao($Data){
        if(strlen($Data) <= 0){
           echo "Campo Vázio";
        }else if($Data > date('Y-m-d')){
          echo "A data de manutenção não pode ser maior que a data atual";
        }else{
            $this->DataManutencaoValidado = true;       
        }
    }
    public function DataValidado(){
      if($this->DataManutencaoValidado == true){
        return true;
      }else{
        return false;
      }
    }
    public function ValidaObservacaoManutencao($Observacao){
       if(strlen($Observacao)<=0){
          echo "Campo Vázio";
       }else if(strlen($Observacao) >= 301){
         echo "Campo Muito Grande";
       }else{
        trim($Observacao);
        $this-> ObservacaoManutencaoValidado = true;
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
