<?php
class SelectCar{
    public function SelectThePlateForRegistration($Conecta, $Placa){
         $QuerySelectPlaca = $Conecta->query("SELECT Placa FROM cars WHERE Placa = '$Placa'");
         while($VerificaSeExisteplaca = $QuerySelectPlaca->fetch(PDO::FETCH_ASSOC)){
            die("Essa Placa Já está Cadastrada");
            
         }
    }
    public function SelectCars($Conecta){
         $QuerySelectCars = $Conecta->query("SELECT Car_Id,Placa, Marca, Modelo FROM Cars LIMIT 15");
         while($SelectCars = $QuerySelectCars->fetch(PDO::FETCH_ASSOC)){
            echo 
            '
    <section>
 <table class="Tabela">
 <tr>
     <th><h3 title="Placa">Placa</h3></th>        
     <th><h3 title="Marca">Marca</h3></th>
     <th><h3 title="Modelo">Modelo</h3></th>
      <th><a href="MaintenanceCar.php?Car='.$SelectCars['Car_Id'].'" title="Ver Mais" target="_blank">Ver Mais</a></th>
 </tr>
    <tr>
     <td>'.$SelectCars['Placa'].'</td>
     <td>'.$SelectCars['Marca'].'</td>
     <td>'.$SelectCars['Modelo'].'</td>
 
  </tr>
 </table>
 </section>
            ';
         }
    }
}
class SelectMaintenance{
    public $IdURlCar;
    public function GetIdUrl(){
        if(isset($_GET['Car']) && is_numeric($_GET['Car'])){
             $this-> IdURlCar =  $_GET['Car'];
        }else{
            die("Error, id Get Car Não Existe");
        }
     }
     public function CheckIfMaintenanceExists($Conecta){
         $IdCar =  $this-> IdURlCar ;
         $QueryCheckIfExistId = $Conecta->query("SELECT Id_Car FROM maintenance WHERE Id_Car = $IdCar");
         while(!$QueryCheckIfExistId->fetch(PDO::FETCH_ASSOC)){
            $Header = "CadastraManutencao.php?Car=".$IdCar;
           header("Location:CadastraManutencao.php?Car=".$IdCar);
            break;
         }
     }
    public function SelectMaintenance($Conecta){
        $IdCar =  $this-> IdURlCar ;
        $QueryMaintenance = $Conecta->query("SELECT id_manutencao, Id_Car, Observacao, Peca, Valor_Peca, Valor_Mao_De_Obra, Data, 
        Tipo_De_Manutencao, Local FROM maintenance WHERE Id_Car = $IdCar");
        while($SelectLinhaIdMaintenanceTable = $QueryMaintenance->fetch(PDO::FETCH_ASSOC)){
               echo "
                
               ";
        }
    }
    public function SelectIdMaintenance($Conecta){
        // Verifica  Se Existe Id na tabela maintenance e se é igual a o do id na tabela cars, e se é igual ao da url
        $Id_URl = $_GET['Car'];
        $QuerySelectIdCarUrl = $Conecta->query("SELECT  maintenance.id_manutencao ,maintenance.Id_Car, maintenance.Observacao, 
        maintenance.Peca, maintenance.Valor_Peca, maintenance.Valor_Mao_De_Obra ,maintenance.Data,
         maintenance.Tipo_De_Manutencao, maintenance.Kilometragem ,cars.Car_Id, cars.Placa, cars.Marca, cars.Modelo
      FROM  maintenance INNER JOIN cars ON maintenance.Id_Car = Cars.Car_Id WHERE maintenance.Id_Car = $Id_URl");
       while($SelectLinhaIdMaintenance = $QuerySelectIdCarUrl->fetch(PDO::FETCH_ASSOC)){
            if($SelectLinhaIdMaintenance == true){
                echo 
                '
        <section>
     <table class="Tabela">
     <tr>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Placa&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Placa" target="_blank">Placa</a></th>        
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Peca&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Peça" target="_blank">Peça</a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=ValorPeca&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Valor Da Peça" target="_blank" >Valor Peça</a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=ValorMaoDeObra&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Valor Da Mão De Obra" target="_blank">Valor Mão De Obra</a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Kilometragem&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Modelo" target="_blank">Kilometragem</a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Data&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Modelo" target="_blank">Data</a></th>
     </tr>
        <tr>
         <td>'.$SelectLinhaIdMaintenance['Placa'].'</td>
         <td>'.$SelectLinhaIdMaintenance['Peca'].'</td>
         <td>R$ '.$SelectLinhaIdMaintenance['Valor_Peca'].'</td>
         <td>R$ '.$SelectLinhaIdMaintenance['Valor_Mao_De_Obra'].'</td>
         <td>'.$SelectLinhaIdMaintenance['Kilometragem'].'</td>
         <td>'.$SelectLinhaIdMaintenance['Data'].'</td>
      </tr>
     </table>
   
     </section>
     <main>
      <div>
      <h3>A Manutenção Foi Realizada No(A) Parte: '.$SelectLinhaIdMaintenance['Tipo_De_Manutencao'].'</h3>
      </div>
      <div>
      <h3>Observação:</h3>
      <p>'.$SelectLinhaIdMaintenance['Observacao'].'</p>
      </div>
      </main>
                ';
            }
       }
    }

}
$SelectCar = new SelectCar(); 
$SelectMaintenance = new SelectMaintenance();
?>