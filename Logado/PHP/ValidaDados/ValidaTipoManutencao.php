<?php 
include_once("ValidaManutencao.php");
class ValidaIds{
  public function GetIdUrl(){
        if(isset($_GET['Car']) && is_numeric($_GET['Car'])){
           return $_GET['Car'];
        }else if(isset($_GET['NaoExiste']) && is_numeric($_GET['NaoExiste'])){
           return [$_GET['NaoExiste'], 'NaoExiste', true];
        }else if(isset($_GET['IdNovaManutencao']) && is_numeric($_GET['IdNovaManutencao'])){
           return [$_GET['IdNovaManutencao'], 'IdNovaManutencao', true];
        }else{
          return false;            
          //  die("Error, id Get Car Não Existe");         
        }
     }
}
class TipoManutencao extends ValidaCadastroManutencao{
      public $Tipo;
      public $CamposSelecionados;
    public $ArrayCampo;
    public function VerificaTipoManutencao(){  
     $Tipo = $this->ValidaTipoManutencao();
     if($Tipo != false && $Tipo != "Inválido"){
        $ValidaIds = new ValidaIds();
         if($ValidaIds -> GetIdUrl() != false){
        $redireciona = $ValidaIds -> GetIdUrl()[1]."=".$ValidaIds -> GetIdUrl()[0]."&tipo=".$Tipo;
        header("location:CadastrarManutencao.php?".$redireciona);
        exit();
         } else{
            echo "error";
           //  mandar para tela de error, falando que nao existe carro cadastrado 
         }
    }
    }
public function Campos($ValidaCadastroManutencao){
$Campos['Data'] = "
  <div id='DataDiv'>
    <h3>Data Da Manutenção <span> *</span></h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaDataManutencao()}</p>
    <input type='date' name='Data' id='Data'>
  </div>
";
$Campos['DataProximaManutencao'] = "
  <div id='DataDiv'>
    <h3>Data Da Próxima Manutenção</h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaDataProximaManutencao()}</p>
    <input type='date' name='DataProximaManutencao' id='DataProximaManutencao'>
  </div>
";
$Campos['Quilometragem'] =  "
  <div class='QuilometragemAtual' id=''>
    <h3>Quilometragem Atual Do Carro <span> *</span></h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaQuilometragem()}</p>
    <input type='number' placeholder='Quilometragem' name='Quilometragem' id='Quilometragem'>
  </div>
";

$Campos['MaoDeObra'] = "
  <div id='ValorMaoObraDiv'>
    <h3>Valor Da Mão De Obra</h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaMaoDeObra()}</p>
    <input type='text' placeholder='Valor Da Mão De Obra' name='MaoDeObra' id='MaoDeObra'>
  </div>
";

$Campos['ValorPeca'] = "
  <div id='ValorPecaDiv'>
    <h3>Valor Da Peça ou fluido <span> *</span></h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaValorPeca()}</p>
    <input type='text' placeholder='Valor Da Peça' name='ValorPeca' id='ValorPeca'>
  </div>
";
$Campos['QuantidadeDePecas'] = "
<div id='QuantidadeDePecasDiv'>
<h3>Quantidade De Pecas ou Fluídos (unitário) <span> *</span></h3>
<p class='error'>{$ValidaCadastroManutencao->ValidaQuantidadePeca()}</p>
<input type='number' placeholder='Ex: 10' name='QuantidadePeca' id='QuantidadePeca'>
</div>";

$Campos['LocalFeitoManutencao'] = "
<div id='LocalFeitoManutencaoDiv'>
    <h3>Local Que Foi Feita A Manutenção </h3>
    <p class='error'>{$ValidaCadastroManutencao->ValidaLocalManutencao()}</p>
    <input type='text' placeholder='Ex: Rua Guaira, ***' name='LocalManutencao' id='LocalManutencao'>
</div>";
$Campos['Peca'] = "
<div id='PecaDiv'>
    <h3>Peça ou fluido <span> *</span></h3>
    <p class='error'>{$ValidaCadastroManutencao -> ValidaPecaManutencao()}</p>
    <input type='text' placeholder='Peça Ex: Filtro De ar' name='Peca' id='Peca'>
</div>
";
$Campos['Observacao'] = "
<div id='ObservacaoDiv'>
    <h3>Observação <span> *</span></h3>
    <p class='error'>{$ValidaCadastroManutencao -> ValidaObservacaoManutencao()}</p>
    <textarea name='observacao' id='Observacao' maxlength='300'>
    </textarea>
</div>
";
$Campos['TipoServico'] = "
<div id='TipoServico'>
  <h3>Tipo De Serviço <span> *</span></h3>
  <p class='error'>{$ValidaCadastroManutencao -> ValidaTipoServico()}</p>
  <select name='TipoServico'>
  <option>---</option>
   <option>Inspeção De Rotina</option>
   <option>Revisão Programada</option>
   <option>Pré-Compra</option>
   <option>Revisão Pós-Viagem</option>
   <option>Outro</option>
  </select>
</div>
";
$Campos['NomeMecanico'] = "
<div id='PecaDiv'>
    <h3>Nome Do Mecânico ou Responsavel técnico</h3>
    <p class='error'>{$ValidaCadastroManutencao -> ValidaPecaManutencao()}</p>
    <input type='text' placeholder='Nome Do Mecânico ou Responsavel técnico' name='NomeMecanico' id='NomeMecanico'>
</div>
";
$Campos['Status'] = "
<div id='StatusDiv'>
<h3>Status <span> *</span></h3>
<p class='error'>{$ValidaCadastroManutencao -> ValidaStatusManutencao()}</p>
<select name='status'>
   <option>---</option>
   <option>Trocar</option>
   <option>Reparar</option>
   <option>substituir</option>
   <option>Outro</option>
</select>
</div>
";

$this->ArrayCampo = $Campos; 

    }
    public function SelecionaCamposTipo(){

  $CamposManutencao = array(
  'Data' => array(
    $this->ArrayCampo['Data'],
    $this->ArrayCampo['DataProximaManutencao']
  ),
  'Mecanico' => array(
    $this->ArrayCampo['NomeMecanico'],
    $this->ArrayCampo['TipoServico'],
    $this->ArrayCampo['MaoDeObra'],
    $this->ArrayCampo['LocalFeitoManutencao']
  ),
  'Carro' => array(
    $this->ArrayCampo['Peca'],
    $this->ArrayCampo['ValorPeca'],
    $this->ArrayCampo['QuantidadeDePecas'],
    $this->ArrayCampo['Quilometragem'],
    $this->ArrayCampo['Status'],
    $this->ArrayCampo['Observacao']
  )
);
if (isset($_GET['tipo'])) {
    if($_GET['tipo'] == "Preventiva" || $_GET['tipo'] == "Corretiva" || $_GET['tipo'] == "Outro"){
     $this->CamposSelecionados = [
    'Data' => [0,1],
    'Mecanico' => [0,1,2,3],
    'Carro' => [0,1,2,3,4,5]
   ];
foreach ($this->CamposSelecionados as $grupo => $indices) {
   if(isset($CamposManutencao[$grupo])){
    foreach ($CamposManutencao[$grupo] as $indice => $valor) {
            if (in_array($indice, $indices)) {
                echo $valor;
            }
        }
   }
}
}
}
 }
  }
 
 $TipoManutencao = new TipoManutencao();
