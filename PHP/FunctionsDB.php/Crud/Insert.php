<?php

class InsertNewCar{
    public function InsertCar($Conecta){
        
       $QueryInsertCar = $Conecta->prepare('INSERT INTO cars (Placa, Marca, Modelo) VALUES(:placa, :marca, :modelo)');
       $QueryInsertCar->execute(array(
         ':placa' => $_SESSION['placa'],
        ':marca' => $_SESSION['marca'],
        ':modelo' => $_SESSION['modelo']
       ));
        unset($_SESSION['placa']);
        die("Cadastrado!");
    }
}
$Insert = new InsertNewCar();
?>