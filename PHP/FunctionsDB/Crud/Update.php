<?php

class AlteraDados{
         public function AlterarDados($Alterar,$IdAlterarManutencao,$IdAlterarCarro,$Conecta,$ValidaCadastroManutencao,$ValidaCadastro,$Placa,$Peca,$ValorPeca,$MaoDeObra){
          // Verificar se existe na tabela antes de alterar o valor dela
          switch($Alterar){
            case "Placa":
             if($ValidaCadastro -> PlacaValidado() == true){
              $QueryUpdatePlaca = $Conecta->prepare("UPDATE cars SET Placa = :Placa WHERE Car_Id = :Car_Id");
              $QueryUpdatePlaca->execute(array(
                ':Placa' => $Placa,
                ':Car_Id' => $IdAlterarCarro
               
              ));
                echo "Alterado";
             }
             break;
            case "Peca":
             if($ValidaCadastroManutencao -> PecaValidado() == true){
               $QueryUpdatePeca = $Conecta->prepare("UPDATE maintenance SET Peca = :Peca WHERE Id_Car = :Id_Car");
               $QueryUpdatePeca->execute(array(
                 ':Peca' => $Peca,
                 ':Id_Car' => $IdAlterarCarro
                
               ));
                 echo "Alterado";
             }
             break;
            case "ValorPeca":
             if($ValidaCadastroManutencao -> ValorPecaValidado() == true){
               $QueryUpdateValorPeca = $Conecta->prepare("UPDATE maintenance SET Valor_Peca = :Valor_Peca WHERE Id_Car = :Id_Car");
               $QueryUpdateValorPeca->execute(array(
                 ':Valor_Peca' => $ValorPeca,
                 ':Id_Car' => $IdAlterarCarro
                
               ));
                 echo "Alterado";
            }
             break;
            case "ValorMaoDeObra":
                  if($ValidaCadastroManutencao ->MaodeObraValidado() == true){
                    $QueryUpdateMaoDeObra = $Conecta->prepare("UPDATE maintenance SET Valor_Mao_De_Obra = :Valor_Mao_De_Obra WHERE Id_Car = :Id_Car");
                    $QueryUpdateMaoDeObra->execute(array(
                      ':Valor_Mao_De_Obra' => $MaoDeObra,
                      ':Id_Car' => $IdAlterarCarro
                     
                    ));
                      echo "Alterado";
                  }
                  break;
                  case "Data":
                  if($ValidaCadastroManutencao ->DataValidado() == true){
                      echo "ok";
                 }
                    break;
              }
         
         }
        }

$AlterarDados = new AlteraDados();

/*
    public function AlterarDados($Alterar,$IdAlterar,$Conecta){
     
         }   $QueryUpdatePlaca = $Conecta->prepare("UPDATE cars SET Placa = :Placa WHERE id_Car = :id_Car'");
            $QueryUpdatePlaca->execute(array(
                ':id_Car'   => $IdAlterar,
                ':Placa' => $nome
              ));*/