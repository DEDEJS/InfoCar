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
                     echo "Não Existe, Carro Favorito, <a href='http://localhost/Projects/InfoCar/Logado/CadastrarNovoCarro.php'>Deseja Cadastrar Um Novo Carro?</a>";
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
               <th>
               <a href="PHP/FunctionsDB/Crud/Delete.php/Delete.php?Car='.$SearchQuery['Car_Id'].'" title="Excluir" target="_blank">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-trash">
               <polyline points="3 6 5 6 21 6" />
               <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
               <path d="M10 11v6" />
               <path d="M14 11v6" />
               <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2" />
               </svg>
               </a>
               </th>
            </tr>
               <tr>
               <td>'.$SearchQuery['Placa'].'</td>
               <td>'.$SearchQuery['Marca'].'</td>
               <td>'.$SearchQuery['Modelo'].'</td>
            </tr>
            </table>
      </section>';
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
     <th>
     <a href="PHP/FunctionsDB/Crud/Delete.php/Delete.php?Car='.$SelectCars['Car_Id'].'" title="Excluir" target="_blank">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-trash">
     <polyline points="3 6 5 6 21 6" />
     <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
     <path d="M10 11v6" />
     <path d="M14 11v6" />
     <path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2" />
     </svg>
     </a>
     </th>
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
      $IconAlterar = '
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" 
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-edit">
         <path d="M12 20h9" />
         <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z" />
         </svg>
      ';
       while($SelectLinhaIdMaintenance = $QuerySelectIdCarUrl->fetch(PDO::FETCH_ASSOC)){
            if($SelectLinhaIdMaintenance == true){
                echo 
                '
        <section class="TabelaManutencao">
     <table class="Tabela">
     <tr>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Placa&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar A Placa" target="_blank">
         '.$IconAlterar.'
         </a></th>        
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Peca&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar A Peça" target="_blank">
        '.$IconAlterar.'
         </a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=ValorPeca&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar O Valor Da Peça" target="_blank" >
         '.$IconAlterar.'
         </a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=ValorMaoDeObra&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar O Valor Da Mão De Obra" target="_blank">
         '.$IconAlterar.'
         </a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Kilometragem&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar O Modelo Do Carro" target="_blank">
         '.$IconAlterar.'
         </a></th>
         <th><a href="AlterarDados.php?ID='.$SelectLinhaIdMaintenance['id_manutencao'].'&Alterar=Data&IDCar='.$SelectLinhaIdMaintenance['Car_Id'].'" title="Alterar A Data" target="_blank">
         '.$IconAlterar.'
         </a></th>
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
    public function SelectLogin($Conecta, $email, $senha) {
      $Query = $Conecta->prepare("SELECT  Email, Senha, TipoCadastro FROM emailusuarios  WHERE Email = :Email AND Senha = :Senha");
      $Query->bindParam(':Email', $email);
      $Query->bindParam(':Senha', $senha);
      $Query->execute();
           if ($Query->rowCount() > 0) {
            echo 'logar';
            $TipoLogin = $Query->fetch(PDO::FETCH_ASSOC);
            /* Criar as sessions e usar a váriavel TipoLogin para diferenciar os usuários */
        } else {
            echo 'Email ou Senha Inválido';
        }
    }
}

?>