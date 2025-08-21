<?php

class AlteraDados  extends GetDados{
   public $Dados;
  public function __construct() {
       return $this->Dados = new GetDadosInput(); 
    }
         public function AlterarDados($Alterar,$IdAlterarManutencao,$IdAlterarCarro,$Conecta,$ValidaCadastroManutencao,$ValidaCadastro){
          // Verificar se existe na tabela antes de alterar o valor dela
           $Placa = $this->Dados -> GetPlaca();
        $Peca = $this->Dados -> GetPeca();
        $ValorPeca = $this -> GetValorPeca();
        $MaoDeObra = $this->Dados -> GetMaoDeObra();
        $Data = $this->Dados -> GetData();
          switch($Alterar){
            case "Placa":
             if($ValidaCadastro -> PlacaValidado() == true){
              $QueryUpdatePlaca = $Conecta->prepare("UPDATE cars SET Placa = :Placa WHERE Car_Id = :Car_Id");
              $QueryUpdatePlaca->execute(array(
                ':Placa' => $Placa,
                ':Car_Id' => $IdAlterarCarro
              ));
                header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
                exit;
             }
             break;
            case "Peca":
             if($ValidaCadastroManutencao -> PecaValidado() == true){
               $QueryUpdatePeca = $Conecta->prepare("UPDATE maintenance SET Peca = :Peca WHERE Id_Car = :Id_Car");
               $QueryUpdatePeca->execute(array(
                 ':Peca' => $Peca,
                 ':Id_Car' => $IdAlterarCarro
               ));
               header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
               exit;
               }
             break;
            case "ValorPeca":
             if($ValidaCadastroManutencao -> ValorPecaValidado() == true){
               $QueryUpdateValorPeca = $Conecta->prepare("UPDATE maintenance SET Valor_Peca = :Valor_Peca WHERE Id_Car = :Id_Car");
               $QueryUpdateValorPeca->execute(array(
                 ':Valor_Peca' => $ValorPeca,
                 ':Id_Car' => $IdAlterarCarro
               ));
               header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
               exit;
            }
             break;
            case "ValorMaoDeObra":
                  if($ValidaCadastroManutencao ->MaodeObraValidado() == true){
                    $QueryUpdateMaoDeObra = $Conecta->prepare("UPDATE maintenance SET Valor_Mao_De_Obra = :Valor_Mao_De_Obra WHERE Id_Car = :Id_Car");
                    $QueryUpdateMaoDeObra->execute(array(
                      ':Valor_Mao_De_Obra' => $MaoDeObra,
                      ':Id_Car' => $IdAlterarCarro
                    ));
                    header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
                    exit;
                  }
                  break;
            case "Data":
                  if($ValidaCadastroManutencao ->DataValidado() == true){
                    $QueryUpdateValorPeca = $Conecta->prepare("UPDATE maintenance SET Data = :data WHERE Id_Car = :Id_Car");
                   $QueryUpdateValorPeca->execute(array(
                     ':data' => $Data,
                    ':Id_Car' => $IdAlterarCarro
               ));
               header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
               exit;
                 }
                  break;
            case "Kilometragem":
                 if($ValidaCadastro -> ValidaQuilometragemValidado() == true){
                  $QueryUpdateQuilometragem = $Conecta->prepare("UPDATE maintenance SET kilometragem = :Quilometragem WHERE Id_Car = :Id_Car");
                  $QueryUpdateQuilometragem->execute(array(
                    ':Quilometragem' => $Quilometragem,
                   ':Id_Car' => $IdAlterarCarro
    
              ));
              header("location:ManutencaoCarro.php?Car=".$IdAlterarCarro);
              exit;
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