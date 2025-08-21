<?php
class SelectCar{
   private $Marca;
   private $Search;
   private $MeuCarroselecionado;
   public function MostraCarroSelecionado($Conecta){
      if($this->Search == false){  
    $VerificaMeuCarroSelecionado = $Conecta->Query("SELECT Car_Id, Placa, Marca, Modelo, MeuCarro, Quilometragem FROM cars WHERE MeuCarro = 'A' LIMIT 5");
    while($QueryVerificaMeuCarroSelecionado = $VerificaMeuCarroSelecionado->fetch(PDO::FETCH_ASSOC)){
          // A = sim, N = não
          echo '
          <section>
<table class="Tabela">
 <tr>
     <th><h3 title="Placa">Placa</h3></th>        
     <th><h3 title="Marca">Marca</h3></th>
     <th><h3 title="Modelo">Modelo</h3></th>
     <th>Quilometragem</a></th>
     <th><a href="ManutencaoCarro.php?Car='.$QueryVerificaMeuCarroSelecionado['Car_Id'].'" title="Ver Mais" target="_blank">Ver Mais</a></th>
 </tr>
    <tr>
     <td>'.$QueryVerificaMeuCarroSelecionado['Placa'].'</td>
     <td>'.$QueryVerificaMeuCarroSelecionado['Marca'].'</td>
     <td>'.$QueryVerificaMeuCarroSelecionado['Modelo'].'</td>
     <td>'.$QueryVerificaMeuCarroSelecionado['Quilometragem'].'<td>
  </tr>
 </table>
 </section>
          ';  
          $this->MeuCarroselecionado = true;
    }
   }else{
      $this->MeuCarroselecionado = true;
   }
   }
   public function VerificaSeExisteCarroSelecionado(){
      if($this->MeuCarroselecionado != true){
         echo "Não Existe, Carro Favorito, <a>Deseja Cadastrar Um Novo Carro?</a>";
      }
   }
    public function SearchMarca($Search, $Marca, $Conecta){
         if($Search == true){
            $this-> Search = true;
             $QuerySearchCars = $Conecta->query("SELECT Car_Id,Placa, Marca, Modelo FROM cars WHERE Marca = '$Marca'");
             while($SearchQuery = $QuerySearchCars->fetch(PDO::FETCH_ASSOC)){
                echo '
<section>
<table class="Tabela">
 <tr>
     <th><h3 title="Placa">Placa</h3></th>        
     <th><h3 title="Marca">Marca</h3></th>
     <th><h3 title="Modelo">Modelo</h3></th>
     <th><a href="ManutencaoCarro.php?Car='.$SearchQuery['Car_Id'].'" title="Ver Mais" target="_blank">Manutenção</a></th>
     <th><a href="PHP/FunctionsDB/Crud/Delete.php/Delete.php?Car='.$SearchQuery['Car_Id'].'" title="Ver Mais" target="_blank">Excluir</a></th>
 </tr>
    <tr>
     <td>'.$SearchQuery['Placa'].'</td>
     <td>'.$SearchQuery['Marca'].'</td>
     <td>'.$SearchQuery['Modelo'].'</td>
  </tr>
 </table>
 </section>
';
 $this-> Marca = true;
break;
}
  if($this->Marca == false && $Search == true){
   echo "
   <h1>Não Existe Marca Registrada</h1>
   "; 
 }
}

    }
    public function SelectThePlateForRegistration($Conecta, $Placa){
         $QuerySelectPlaca = $Conecta->query("SELECT Placa FROM cars WHERE Placa = '$Placa'");
         while($VerificaSeExisteplaca = $QuerySelectPlaca->fetch(PDO::FETCH_ASSOC)){
            die("Essa Placa Já está Cadastrada");
         }
    }
    public function SelectCars($Conecta){
       if($this->Search == false){
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
     <th><a href="ManutencaoCarro.php?Car='.$SelectCars['Car_Id'].'" title="Ver Mais" target="_blank">Manutenção</a></th>
     <th><a href="PHP/FunctionsDB/Crud/Delete.php/Delete.php?Car='.$SelectCars['Car_Id'].'" title="Ver Mais" target="_blank">Excluir</a></th>
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
}
class SelectMaintenance{
    public $IdURlCar;
    public function GetIdUrl(){
        if(isset($_GET['Car']) && is_numeric($_GET['Car'])){
           return  $this-> IdURlCar = $_GET['Car'];
        }else if(isset($_GET['NaoExiste']) && is_numeric($_GET['NaoExiste'])){
           return $this-> IdURlCar = $_GET['NaoExiste'];
        }else if(isset($_GET['IdNovaManutencao']) && is_numeric($_GET['IdNovaManutencao'])){
         return $this-> IdURlCar = $_GET['IdNovaManutencao'];
        }else{
          //  die("Error, id Get Car Não Existe");         
        }
     }
     public function VerificaSeManutencaoExiste($Conecta){
         $IdCar =  $this-> IdURlCar;
         if($IdCar != null){
         $ConsultaSeExisteId = $Conecta->query("SELECT Id_Car FROM maintenance WHERE Id_Car = '$IdCar'");
        while(!$query = $ConsultaSeExisteId->fetch(PDO::FETCH_ASSOC)){
             // Manda para uma página para cadastrar uma nova manutenção com esse Id
             if(!isset($_GET['NaoExiste'])){
             header("location:TipoManutencao.php?NaoExiste=".$IdCar);
             exit;
              }
             break;
          } 
           }
     }
    public function VerificaSeExisteIdParaCadastrar($Conecta){
        $IdCar =  $this-> IdURlCar;
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
        <section class="TabelaManutencao">
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
         <td>'.$SelectLinhaIdMaintenance['Kilometragem'].' KM</td>
         <td>'. date('d-m-Y', strtotime($SelectLinhaIdMaintenance['Data'])).'</td>
      </tr>
     </table>
   
     </section>
     <section>
      <div class="SectionManutencao">
      <h2>Tipo De Manutenção</h2>
      <p>'.$SelectLinhaIdMaintenance['Tipo_De_Manutencao'].'</p>
      <h2>Observação:</h2>
       <p>'.$SelectLinhaIdMaintenance['Observacao'].'</p>
       <div>
      <div class="button"> 
        <button>Gerar PDF</button>
        <button><a href="PHP/FunctionsDB/Crud/Delete.php?IdManutencao='.$SelectLinhaIdMaintenance['id_manutencao'].'">Excluir Manutenção</a></button>
       </div> 
      </div>
      </div>
      </section>
              ';
            }
       }
    }
}
$SelectCar = new SelectCar(); 
$SelectMaintenance = new SelectMaintenance();
class SelectLogin {
    public function SelectLoginEmpresarial($Conecta, $email, $senha, $select) {
      $QueryEmpresarialSelect = $Conecta->prepare("SELECT email, senha, status FROM empresa WHERE email = :email AND senha = :senha AND status = :status");
      $QueryEmpresarialSelect->bindParam(':email', $email);
      $QueryEmpresarialSelect->bindParam(':senha', $senha);
      $QueryEmpresarialSelect->bindValue(':status', "Empresarial");
      $QueryEmpresarialSelect->execute();
           if ($QueryEmpresarialSelect->rowCount() > 0) {
            echo 'logar';
        } else {
            echo 'Email ou Senha Inválido';
        }
    }
    public function SelectLoginGratuito($Conecta, $email, $senha){
      $QueryGratuitolSelect = $Conecta->prepare("SELECT email, senha, Status FROM user WHERE email = :email AND senha = :senha AND Status = :status");
      $QueryGratuitolSelect->bindParam(':email', $email);
      $QueryGratuitolSelect->bindParam(':senha', $senha);
      $QueryGratuitolSelect->bindValue(':status', "Gratuito");
      $QueryGratuitolSelect->execute();
           if ($QueryGratuitolSelect->rowCount() > 0) {
            echo 'logar';
        } else {
            echo 'Email ou Senha Inválido';
        }
    }
    public function SelectLoginPro($Conecta, $email, $senha, $select){
      $QueryProlSelect = $Conecta->prepare("SELECT email, senha, status FROM pro WHERE email = :email AND senha = :senha AND status = :status");
      $QueryProlSelect->bindParam(':email', $email);
      $QueryProlSelect->bindParam(':senha', $senha);
      $QueryProlSelect->bindValue(':status', "Pro");
      $QueryProlSelect->execute();
           if ($QueryProlSelect->rowCount() > 0) {
            echo 'logar';
        } else {
            echo 'Email ou Senha Inválido';
        }
    }
}

?>