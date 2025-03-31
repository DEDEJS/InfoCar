<?php
class SelectCar{
    public function SelectThePlateForRegistration($Conecta){
        $PlacaSession = $_SESSION['placa'];
         $QuerySelectPlaca = $Conecta->query("SELECT Placa FROM cars WHERE Placa = '$PlacaSession'");
         while($VerificaSeExisteplaca = $QuerySelectPlaca->fetch(PDO::FETCH_ASSOC)){
            return true;
         }
    }
    public function SelectCars($Conecta){
         $QuerySelectCars = $Conecta->query("SELECT id_Car,Placa, Marca, Modelo FROM Cars LIMIT 15");
         
    }
}
class SelectMaintenance{
    public function SelectMaintenance($Conecta){
        $QueryMaintenance = $Conecta->query("SELECT id_Maintenance, id_car, ");
    }
}
$SelectCar = new SelectCar(); 
?>