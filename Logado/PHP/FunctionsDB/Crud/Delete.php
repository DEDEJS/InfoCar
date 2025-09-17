<?php
include_once("../../Banco/Banco.php");
// Revisar Esse código inteiro 21/04/2025
class ExcluirManutencao{
    public $Excluir;
    public $ExcluirId;
    public $CarroSendoExcluido;
    public function VerificaSeQuerExcluirManutencao(){
        if(isset($_GET['IdManutencao']) && is_numeric($_GET['IdManutencao'])){
            $this-> ExcluirId = $_GET['IdManutencao'];
        echo  '
          <button><a href="Delete.php?IdManutencao='.$this-> ExcluirId.'&Delete=Sim">Excluir</a></button>
          <button><a href="../../../Manutencao.php">Voltar</a></button>
        ';
         }
    }
    public function VerificaSeCarroEstaSendoExcluido(){
        if(isset($_GET['Car']) && is_numeric($_GET['Car']) && isset($_GET['Delete']) && $_GET['Delete'] == "Sim" && 
         isset($_GET['IdCarManutencao']) && is_numeric($_GET['IdCarManutencao'])){
                 // echo "Excluir Manutencao";
                 $this-> CarroSendoExcluido = true;
        } 
    }
    public function ExcluirManutencao($Conecta){
        if(isset($_GET['Delete']) && $_GET['Delete'] == "Sim" && isset($_GET['IdManutencao']) && is_numeric($_GET['IdManutencao'])){
            // Verificar Se Existe a manutenção Cadastrada no banco
            $Excluir = $Conecta->prepare('DELETE FROM Maintenance WHERE id_Manutencao = :id');
            $Excluir->bindParam(':id', $this-> ExcluirId);
            $Excluir->execute();
            header("location:../../../Manutencao.php");
            die("Excluido");
           //echo $Excluir->rowCount();
        }else if($this->CarroSendoExcluido == true ){
           $ExcluirManutencao = $Conecta->prepare('DELETE FROM Maintenance WHERE id_Car = :IdCar');
           $ExcluirManutencao->bindParam(':IdCar', $_GET['IdCarManutencao']);
           $ExcluirManutencao->execute();
        }
    }
}
class ExcluirCarro{
    public $ExcluirIdCar;

    public function VerificaSeQuerExcluirCarro(){
        if(isset($_GET['Car']) && is_numeric($_GET['Car'])){
            $this-> ExcluirIdCar = $_GET['Car'];
            echo  '
            <button><a href="Delete.php?Car='.$this-> ExcluirIdCar.'&Delete=Sim&IdCarManutencao='.$this->ExcluirIdCar.'">Excluir</a></button>
            <button><a href="../../../../Manutencao.php">Voltar</a></button>
          ';
        }
    }
    public function ExcluirCarro($Conecta){
        if(isset($_GET['Car']) && is_numeric($_GET['Car']) && isset($_GET['Delete']) && $_GET['Delete'] == "Sim" && 
        isset($_GET['IdCarManutencao']) && is_numeric($_GET['IdCarManutencao'])){
            $ExcluirManutencao = $Conecta->prepare('DELETE FROM cars WHERE Car_Id = :IdCar');
            $ExcluirManutencao->bindParam(':IdCar', $_GET['Car']);
            $ExcluirManutencao->execute();
            session_start();
            $_SESSION['ExcluidoCarro'] = true;
            $_SESSION['ExcluidoCarro'] = time() + 20;
            header("location:../../../../Mensagens/Excluido.php");
            exit();
       } 
    }

}

$ExcluirManutencao = new ExcluirManutencao();

$ExcluirManutencao -> VerificaSeQuerExcluirManutencao();
$ExcluirManutencao -> VerificaSeCarroEstaSendoExcluido();
$ExcluirManutencao -> ExcluirManutencao($Conecta);
$ExcluirCarro = new ExcluirCarro();
$ExcluirCarro -> VerificaSeQuerExcluirCarro();
$ExcluirCarro->ExcluirCarro($Conecta);

?>