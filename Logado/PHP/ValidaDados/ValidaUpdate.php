<?php
class GetUrlAlter{
    public $IDAlterar;
    public $Alterar;
    public function GetAlterarIdUrlManutencao(){
        if(isset($_GET['ID']) && is_numeric($_GET['ID']) ){
           return $this-> IDAlterar = $_GET['ID'];
       }else{
          die("Error"); 
       }
    }
    public function GetAlterarIdUrlCarro(){
        if(isset($_GET['IDCar']) && is_numeric($_GET['IDCar']) ){
           return $this-> IDAlterar = $_GET['IDCar'];
       }else{
          die("Error"); 
       }
    }
    public function GetAlterarUrl(){
        $ArrayAlterar = array(
            "Placa",
            "Peca",
            "ValorPeca",
            "ValorMaoDeObra",
            "Kilometragem",
            "Data"
        );
       
        if(isset($_GET['Alterar'])){
            $Alterar = $_GET['Alterar'];
            foreach ($ArrayAlterar as $GET) {
              if($GET === $Alterar){
                return  $this->Alterar = $_GET['Alterar'];
                 break;
              }
            }
            
        }
}
}
$GetUrlAlterar = new GetUrlAlter();
$Alterar = $GetUrlAlterar -> GetAlterarUrl();
$IdAlterarManutencao = $GetUrlAlterar -> GetAlterarIdUrlManutencao();
$IdAlterarCarro = $GetUrlAlterar -> GetAlterarIdUrlCarro();
class ShowInput extends GetDados {
     public $Dados;
  public function __construct() {
       return $this->Dados = new GetDadosInput(); 
    }

    public function Input($Alterar,$ValidaCadastroManutencao,$ValidaCadastro,$Quilometragem){        
        $Placa = $this->Dados -> GetPlaca();
        $Peca = $this->Dados -> GetPeca();
        $ValorPeca = $this -> GetValorPeca();
        $MaoDeObra = $this->Dados -> GetMaoDeObra();
        $Data = $this->Dados -> GetData();
        switch($Alterar){
          case "Placa":
            echo '
            <h3>Alterar A Placa</h3>
           <label for="Placa"> <span class="error">';
            $ValidaCadastro->ValidaPlaca($Placa);
             echo'</span></label>
      <input type="text" placeholder="Alterar Placa:" name="Placa" id="Placa">
      <button type="submit" class="btn-primary">Alterar</button>
            ';
            break;
            case "Peca":
                echo '
                <h3>Alterar A Peça</h3>
                <label for="Peca"><span class="error">';
                $ValidaCadastroManutencao -> ValidaPecaManutencao($Peca);
                echo' </span></label>
                <input type="text" placeholder="Alterar A Peça:" name="Peca" id="Peca">
                <button type="submit" class="btn-primary">Alterar</button>
                ';
            break;
            case "ValorPeca":
                echo '
                <h3>Alterar O Valor Da Peça</h3>
                <label for="ValorPeca"> <span class="error">';
                $ValidaCadastroManutencao -> ValidaValorPeca($ValorPeca);
                echo '</span></label>
                <input type="number" placeholder="Alterar Valor Da Peça" name="ValorPeca" id="ValorPeca" >
                <button type="submit" class="btn-primary">Alterar</button>
                ';
            break;
            case "ValorMaoDeObra":
                echo' 
                <h3>Alterar O Valor Da Mão De Obra</h3>
                <label for="MaoDeObra"><span class="error">';
                $ValidaCadastroManutencao -> ValidaMaoDeObra($MaoDeObra);
                echo' </span></label>
          <input type="number" placeholder="Alterar Valor Da Mão De Obra" name="MaoDeObra" id="MaoDeObra" >
                 <button type="submit" class="btn-primary">Alterar</button>
                ';
            break;
            case "Kilometragem":
                echo '
                <h3>Alterar A Kilometragem</h3>
                <label for="Quilometragem"><span class="error">';
                        $ValidaCadastro -> ValidaQuilometragem($Quilometragem);
                echo' </span></label>
                <input type="number" placeholder="Alterar a Quilometragem" name="Quilometragem" id="Quilometragem" >
                 <button type="submit" class="btn-primary">Alterar</button>
                ';
            break;
            case "Data":
                echo '
                 <h3>Alterar A Data</h3>
                 <label for="Data"><span class="error"> ';
                 $ValidaCadastroManutencao -> ValidaDataManutencao($Data);
                 echo'</span></label>
                 <input type="date" name="Data" id="Data">
                 <button type="submit" class="btn-primary">Alterar</button>
                ';
            break;
         }
    }
}
$ShowInput = new ShowInput();
