<?php
 //$VerificaSeExisteId = $SelectMaintenance -> VerificaSeExisteIdParaCadastrar($Conecta);
class InsertNewCar{
    public function InsertCar($Conecta, $Placa,$Marca,$Modelo,$MeuCarro,$Quilometragem){
          $QueryInsertCar = $Conecta->prepare('INSERT INTO cars (Placa, Marca, Modelo, MeuCarro, Quilometragem) 
       VALUES(:placa, :marca, :modelo, :MeuCarro, :Quilometragem)');
       $QueryInsertCar->execute(array(
         ':placa' => $Placa,
        ':marca' => $Marca,
        ':modelo' => $Modelo,
        ':MeuCarro' => $MeuCarro,
        ':Quilometragem' => $Quilometragem
       ));
       $this-> Cadastrado = true;
       session_start();
       $_SESSION['Cadastrado'] = true;
       $_SESSION['Cadastrado'] = time() + 30;
       header("location:Mensagens/Cadastrado.php");
       exit();
       // mandar para uma página falando que foi cadastrado
    }
 
}
class InsertNewMaintenance{
    public function InsertMaintenanceDB($Conecta,$IdCar ,$Tipo, $Peca,  $PecaCodigo, $FabricantePecaCodigo, $ValorPeca, $MaoDeObra, $LocalManutencao, $Data, $Observacao){
        $QueryInsertMaintenance = $Conecta->prepare('INSERT INTO maintenance (Id_Car, Peca, CodigoPeca, FabricantePeca, Valor_Peca, Valor_Mao_De_Obra, Data, Tipo_De_Manutencao, Local, Observacao) 
        VALUES(:Id_Car, :Peca, :CodigoPeca, :FabricantePeca, :Valor_Peca, :Valor_Mao_De_Obra, :Data, :Tipo_De_Manutencao, :Local, :Observacao)');
         $QueryInsertMaintenance->execute(array(
            ':Id_Car' => $IdCar,
             ':Peca' => $Peca,
             ':CodigoPeca' => $PecaCodigo,
             ':FabricantePeca' => $FabricantePecaCodigo,
             ':Valor_Peca' => $ValorPeca,
             ':Valor_Mao_De_Obra' => $MaoDeObra,
             ':Data' => $Data,
             ':Tipo_De_Manutencao' => $Tipo,
             ':Local' => $LocalManutencao,
             ':Observacao' => $Observacao
         ));
         echo "Cadastrado";
         header("location:ManutencaoCarro.php?Car=".$IdCar);
         exit();
    
     }
    }

$Insert = new InsertNewCar();
$InsertMaintence =  new InsertNewMaintenance();
//$Cadastro = $Insert -> VerificaSefoiCadastrado();
?>