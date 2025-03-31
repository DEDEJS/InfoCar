<?php
include_once("PHP/Get/GetCadastro.php");
$Placa = $GetCadastro -> GetPlaca();
$Marca = $GetCadastro -> GetMarca();
$Modelo = $GetCadastro -> GetModelo();
class ValidaCadastro{
  private $MarcaSelecionada;
  private $PlacaValidada;
  private $MarcaValidada;
  private $id;
  private $IdMarcaSelecionado;
  // arrays que vão alocar os modelos de carro
  private $ArrayAudi;
  private $ArrayBmw;
  private $ArrayChevrolet;
  private $ArrayFiat;
  private $ArrayFord;
  private $ArrayHonda;
  private $ArrayHyundai;
  private $ArrayJeep;
  private $ArrayKia;
  private $ArrayMercedes;
  public function ValidaPlaca($Placa){
      if(strlen($Placa)<=0 && strlen($Placa) != 7){
             echo "Placa Inválida";
      }else{ 
         $this->PlacaValidada = true;
      }
  }
    public function ValidaMarca($Marca){
        $ArrayMarca = array (
            "---",
            "Audi",
            "Bmw",
            "Chevrolet",
            "Fiat",
            "Ford",
            "Honda",
            "Hyundai",
            "Jeep",
            "Kia",
            "Mercedes-Bens",
            "Renault",
            "Volkswagen"
         );
      if($Marca == $ArrayMarca[0]){
           echo "Escolha Uma Marca";
      }else{
       foreach($ArrayMarca as $Marcas){
        if($Marcas === $Marca){
             $this-> MarcaSelecionada = $Marcas;
             break;
        }
       }
       $this->MarcaValidada = true;
        }
    }
public function Modelos(){
      $this-> ArrayAudi  = array (
        "<option>A1</option>",
        "<option>A3</option>",
        "<option>A4</option>",
        "<option>A5</option>",
        "<option>A6</option>",
        "<option>A7</option>",
        "<option>A8</option>"
      );
      $this-> ArrayBmw = array(
        "<option>1M</option>",
        "<option>116I</option>",
        "<option>118I</option>",
        "<option>120I</option>",
        "<option>125I</option>",
        "<option>130I</option>",
        "<option>320</option>",
        "<option>320I</option>",
        "<option>330E</option>",
        "<option>420I</option>",
        "<option>428I</option>",
        "<option>M1</option>",
        "<option>M2</option>",
        "<option>M3</option>",
        "<option>M4</option>",
        "<option>M5</option>",
        "<option>M6</option>",
        "<option>M8</option>",
        "<option>X1</option>",
        "<option>X2</option>",
        "<option>X3</option>",
        "<option>X4</option>",
        "<option>X5</option>",
        "<option>X6</option>",
        "<option>X7</option>",
        "<option>Z3</option>",
        "<option>Z4</option>",
      );

      $this-> ArrayChevrolet = array(
        "<option>Agile</option>",
        "<option>Astra</option>",
        "<option>Blazer</option>",
        "<option>C10</option>",
        "<option>C14</option>",
        "<option>C15</option>",
        "<option>C20</option>",
        "<option>Calibra</option>",
        "<option>Camaro</option>",
        "<option>Captiva</option>",
        "<option>Caravan</option>",
        "<option>Celta</option>",
        "<option>Chevelle</option>",
        "<option>Chevette</option>",
        "<option>Chevy 500</option>",
        "<option>Classic</option>",
        "<option>Cobalt</option>",
        "<option>Corsa</option>",
        "<option>Corvette</option>",
        "<option>Cruze</option>",
        "<option>D10</option>",
        "<option>D20</option>",
        "<option>D40</option>",
        "<option>Impala</option>",
        "<option>Kadett</option>", 
        "<option>Omega</option>",
        "<option>Onix</option>",
        "<option>Opala</option>",
        "<option>Prisma</option>",
        "<option>S10</option>",
        "<option>Silverado</option>",
        "<option>Spin</option>",
        "<option>Tracker</option>",
        "<option>Vectra</option>",
        "<option>Zafira</option>"
      );
      $this-> ArrayFiat = array(
        "<option>147</option>",
        "<option>500e</option>",
        "<option>Argo</option>",
        "<option>Brava</option>",
        "<option>Bravo</option>",
        "<option>Cronos</option>",
        "<option>Dobló</option>",
        "<option>Elba</option>",
        "<option>Fastback</option>",
        "<option>Fiorino</option>",
        "<option>Grand Siena</option>",
        "<option>Idea</option>",
        "<option>Linea</option>",
        "<option>Marea</option>",
        "<option>Mobi</option>",
        "<option>Palio</option>",
        "<option>Premio</option>",
        "<option>Pulse</option>",
        "<option>Siena</option>",
        "<option>Stilo</option>",
        "<option>Strada</option>",
        "<option>Tempra</option>",
        "<option>Tipo</option>",
        "<option>Toro</option>",
        "<option>Uno</option>"
      );
      $this-> ArrayFord = array (
        "<option>Belina</option>",
        "<option>Bronco Sport</option>",
        "<option>Corcel</option>",
        "<option>Courier</option>",
        "<option>Del Rey</option>",
        "<option>Ecosport</option>",
        "<option>Edge</option>",
        "<option>Escort</option>",
        "<option>Expedition</option>",
        "<option>Explorer</option>",
        "<option>F-1</option>",
        "<option>F-100</option>",
        "<option>F-1000</option>",
        "<option>F-2000</option>",
        "<option>F-250</option>",
        "<option>F-350</option>",
        "<option>F-4000</option>",
        "<option>F-75</option>",
        "<option>Fiesta</option>",
        "<option>Focus</option>",
        "<option>Fusion</option>",
        "<option>Galaxie</option>",
        "<option>Jeep</option>",
        "<option>Ka</option>",
        "<option>Landau</option>",
        "<option>Maverick</option>",
        "<option>Mustang</option>",
        "<option>Pampa</option>",
        "<option>Ranger</option>",
        "<option>Royale</option>",
        "<option>Territory</option>",
        "<option>Transit</option>",
        "<option>Verona</option>",
        "<option>Versailles</option>"
      );
      $this-> ArrayHonda = array(
        "<option>Accord</option>",
        "<option>City</option>",
        "<option>Civic</option>",
        "<option>Crv</option>",
        "<option>Fit</option>",
        "<option>Hr-v</option>",
        "<option>Prelude</option>",
        "<option>Wr-v</option>",
        "<option>Zr-v</option>"
      );
      $this-> ArrayHyundai = array(
        "<option>Atos</option>",
        "<option>Azera</option>",
        "<option>Coupê</option>",
        "<option>Creta</option>",
        "<option>Elantra</option>",
        "<option>Grand Santa Fé</option>",
        "<option>Hb20</option>",
        "<option>Hr</option>",
        "<option>I30</option>",
        "<option>Ix35</option>",
        "<option>Santa Fé</option>",
        "<option>Sonata</option>",
        "<option>Tucson</option>",
        "<option>Veloster</option>",
        "<option>Veracruz</option>"
      );
      $this-> ArrayJeep = array(
        "<option>Cherokee</option>",
        "<option>Cj 5</option>",
        "<option>Cj 6</option>",
        "<option>Commander</option>",
        "<option>Compass</option>",
        "<option>Gladiator</option>",
        "<option>Grand Cherokee</option>",
        "<option>Renegade</option>",
        "<option>Wrangler</option>"
      );
      $this-> ArrayKia = array(
        "<option>Cadenza</option>",
        "<option>Carnival</option>",
        "<option>Cerato</option>",
        "<option>Picanto</option>",
        "<option>Sorento</option>",
        "<option>Sportage</option>"
      );
      $this-> ArrayMercedes = array(
        "<option>A 160</option>",
        "<option>A 190</option>",
        "<option>A 200</option>",
        "<option>A 250</option>",
        "<option>A 35 Amg</option>",
        "<option>A 45 Amg</option>",
        "<option>Amg Gt</option>",
        "<option>Amg Gt 43</option>",
        "<option>Amg Gt 63</option>",
        "<option>B 170</option>",
        "<option>B 180</option>",
        "<option>B 200</option>",
        "<option>C 180</option>",
        "<option>C 200</option>",
        "<option>C 220</option>",
        "<option>C 230</option>",
        "<option>C 240</option>",
        "<option>C 250</option>",
        "<option>C 280</option>",
        "<option>C 300</option>",
        "<option>C 320</option>",
        "<option>C 32 Amg</option>",
        "<option>C 350</option>",
        "<option>C 43 Amg</option>",
        "<option>C 450 Amg</option>",
        "<option>C 450</option>",
        "<option>C 55 Amg</option>",
        "<option>C 63 Amg</option>",
        "<option>Cl 500</option>",
        "<option>Cl 63 Amg</option>",
        "<option>Cla 180</option>",
        "<option>Cla 200</option>",
        "<option>Cla 250</option>",
        "<option>Cla 35 Amg</option>",
        "<option>Cla 45 Amg</option>",
        "<option>Classe A</option>",
        "<option>Cla 180</option>",
        "<option>Cla 180</option>",
        "<option>Cla 180</option>"
      );// Entre outros
      }

public function ImprimeValores(){
        if($this-> MarcaSelecionada == "Audi"){      
         foreach($this->ArrayAudi as $SelectAudi){
          $this->IdMarcaSelecionado = '1';
            echo $SelectAudi;
            }
      }else if($this-> MarcaSelecionada == "Bmw"){
        foreach($this->ArrayBmw as $SelectBmw){
          $this->IdMarcaSelecionado = '2';
          echo $SelectBmw;
            }
      }else if($this-> MarcaSelecionada == "Chevrolet"){
        foreach($this->ArrayChevrolet as $SelectChevrolet){
          $this->IdMarcaSelecionado = '3';
          echo $SelectChevrolet;
         }
      }else if($this-> MarcaSelecionada == "Fiat"){
        foreach($this->ArrayFiat as $SelectFiat){
          $this->IdMarcaSelecionado = '4';
          echo $SelectFiat;
         }
      }else if($this-> MarcaSelecionada == "Ford"){
        foreach($this->ArrayFord as $SelectFord){
          $this->IdMarcaSelecionado = '5';
          echo $SelectFord;
         }
      }else if($this-> MarcaSelecionada == "Honda"){
        foreach($this->ArrayHonda as $SelectHonda){
          $this->IdMarcaSelecionado = '6';
          echo $SelectHonda;
         }
      }else if($this-> MarcaSelecionada == "Hyundai"){
        foreach($this->ArrayHonda as $SelectHyundai){
          $this->IdMarcaSelecionado = '7';
          echo $SelectHyundai;
         }
      }else if($this-> MarcaSelecionada == "Jeep"){
        foreach($this->ArrayJeep as $SelectJeep){
          $this->IdMarcaSelecionado = '8';
          echo $SelectJeep;
         }
      }else if($this-> MarcaSelecionada == "Kia"){
        foreach($this->ArrayKia as $SelectKia){
          $this->IdMarcaSelecionado = '9';
          echo $SelectKia;
         }
      }else if($this-> MarcaSelecionada == "Mercedes-Bens"){
        foreach($this->ArrayMercedes as $SelectMercedes){
          $this->IdMarcaSelecionado = '10';
          echo $SelectMercedes;
         }
      }else{
        $this->IdMarcaSelecionado = false;
      }
      }
public function ValidaModelos($Modelo){
      if($Modelo == "Outro Modelo"){
         echo "Escolha Um Modelo Válido";
      }
}
public function HeaderCadastro($Placa,$Marca,$Modelo){
       if($this->PlacaValidada == true && $this->MarcaValidada == true && $this-> IdMarcaSelecionado != false){
            session_start();
            $_SESSION['placa'] = $Placa;
            $_SESSION['marca'] = $Marca;
            $_SESSION['modelo'] = $Modelo;
            header("location:PHP/FunctionsDB.php/Crud/RegisterCar.php");
            exit();
       }
}
 }
$ValidaCadastro = new ValidaCadastro();

?>