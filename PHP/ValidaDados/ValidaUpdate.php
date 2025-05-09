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
class ShowInput{
    public function Input($Alterar,$ValidaCadastroManutencao,$ValidaCadastro,$Placa,$Peca,$ValorPeca,$MaoDeObra,$Quilometragem,$Data){        
        switch($Alterar){
          case "Placa":
            echo '
            <h3>Alterar A Placa</h3>
            <p class="error">';
            $ValidaCadastro->ValidaPlaca($Placa);
             echo'</p>
      <input type="text" placeholder="Alterar Placa:" name="Placa" id="Placa">
      <input type="submit" value="Alterar"> 
            ';
            break;
            case "Peca":
                echo '
                <h3>Alterar A Peça</h3>
                <p class="error">';
                $ValidaCadastroManutencao -> ValidaPecaManutencao($Peca);
                echo' </p>
          <input type="text" placeholder="Alterar A Peça:" name="Peca" id="Peca">
           <input type="submit" value="Alterar"> 
                ';
            break;
            case "ValorPeca":
                echo '
                 <h3>Alterar O Valor Da Peça</h3>
                <p class="error">';
                $ValidaCadastroManutencao -> ValidaValorPeca($ValorPeca);
                echo ' </p>
          <input type="number" placeholder="Alterar Valor Da Peça" name="ValorPeca" id="ValorPeca" >
           <input type="submit" value="Alterar"> 
                ';
            break;
            case "ValorMaoDeObra":
                echo' 
                 <h3>Alterar O Valor Da Mão De Obra</h3>
                        <p class="error">';
                $ValidaCadastroManutencao -> ValidaMaoDeObra($MaoDeObra);
                echo' </p>
          <input type="number" placeholder="Alterar Valor Da Mão De Obra" name="MaoDeObra" id="MaoDeObra" >
           <input type="submit" value="Alterar"> 
                ';
            break;
            case "Kilometragem":
                echo '
                 <h3>Alterar A Kilometragem</h3>
                   <p class="error">';
                        $ValidaCadastro -> ValidaQuilometragem($Quilometragem);
                echo' </p>
          <input type="number" placeholder="Alterar a Quilometragem" name="Quilometragem" id="Quilometragem" >
           <input type="submit" value="Alterar"> 
                ';
            break;
            case "Data":
                echo '
                 <h3>Alterar A Data</h3>
                 <p> ';
                 $ValidaCadastroManutencao -> ValidaDataManutencao($Data);
                 echo'</p>
        <input type="date" name="Data" id="Data">
           <input type="submit" value="Alterar"> 
                ';
            break;
         }
    }
}
$ShowInput = new ShowInput();
