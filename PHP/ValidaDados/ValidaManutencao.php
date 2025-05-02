<?php
include_once("PHP/Get/GetCadastroManutencao.php");
$Tipo = $GetCadastroManutencao ->GetTipoManutencao();
$Peca = $GetCadastroManutencao ->GetPeca();
$ValorPeca = $GetCadastroManutencao ->GetValorPeca();
$MaoDeObra = $GetCadastroManutencao ->GetMaoDeObra();
$LocalManutencao = $GetCadastroManutencao ->GetLocalManutencao();
$Data = $GetCadastroManutencao ->GetData();
$Observacao = $GetCadastroManutencao ->GetObservacao();
class ValidaCadastroManutencao{
    private $TipoValidado;
    private $PecaValidado;
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
    public function ValidaValorPeca($ValorPeca){
        if(strlen($ValorPeca)<= 0){
           echo "Campo Vázio";
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
    public function CadastraManutencao($Tipo, $Peca, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao){
      include_once("PHP/Banco/banco.php");
      include_once("PHP/FunctionsDB/Crud/Select.php");
      $SelectMaintenance -> VerificaSeManutencaoExiste($Conecta);
           if($this-> TipoValidado == true && $this-> PecaValidado == true && $this->ValorPeca == true &&
            $this->MaoDeObraValidado == true && $this->LocalManutencaoValidado  == true &&
             $this-> DataManutencaoValidado  == true && $this-> ObservacaoManutencaoValidado == true ){
                echo "Cadastrar";
                $IdCar = $SelectMaintenance -> GetIdUrl();
                include_once("PHP/FunctionsDB/Crud/Insert.php");
                $InsertMaintence ->InsertMaintenanceDB($Conecta,$IdCar ,$Tipo, $Peca, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao);
              } else{
            echo "Termine De Preencher Os Dados";
           }
    }
}
$ValidaCadastroManutencao = new ValidaCadastroManutencao();
