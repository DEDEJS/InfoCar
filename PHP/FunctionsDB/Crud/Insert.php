<?php

class InsertNewCar{
    public function InsertCar($Conecta, $Placa,$Marca,$Modelo){
        
       $QueryInsertCar = $Conecta->prepare('INSERT INTO cars (Placa, Marca, Modelo) VALUES(:placa, :marca, :modelo)');
       $QueryInsertCar->execute(array(
         ':placa' => $Placa,
        ':marca' => $Marca,
        ':modelo' => $Modelo
       ));
       header("location:Mensagens/Cadastrado.php");
       $_SESSION['Cadastrado'] = "Car";
       // mandar para uma página falando que foi cadastrado
    }
}
class InsertNewMaintenance{
    public function InsertMaintenance($Conecta,$IdCar ,$Tipo, $Peca, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao){

        $QueryInsertMaintenance = $Conecta->prepare('INSERT INTO maintenance (Id_Car, Peca, Valor_Peca, Valor_Mao_De_Obra, Data, Tipo_De_Manutencao, Local, Observacao) 
        VALUES(:Id_Car, :Peca, :Valor_Peca, :Valor_Mao_De_Obra, :Data, :Tipo_De_Manutencao, :Local, :Observacao)');
         $QueryInsertMaintenance->execute(array(
            ':Id_Car' => $IdCar,
             ':Peca' => $Peca,
             ':Valor_Peca' => $ValorPeca,
             ':Valor_Mao_De_Obra' => $MaoDeObra,
             ':Data' => $Data,
             ':Tipo_De_Manutencao' => $Tipo,
             ':Local' => $LocalManutencao,
             ':Observacao' => $Observacao
         ));
         echo "Cadastrado";
    }
}
$Insert = new InsertNewCar();
$InsertMaintence =  new InsertNewMaintenance();

?>