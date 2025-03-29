<?php
ini_set('default_charset','UTF-8');
session_start();

class SelectCadastroCarro {
    public $VerificaSeExistePlaca;
    public function VerificaSeExistePlacaCadastrado($conecta){
        if(isset($_SESSION['placa'])){
        $VerificaSeExistePlaca = $conecta->query("SELECT placa FROM carro WHERE placa = '$_SESSION[placa]'");
        while($VerificaSeExistePlacaLinha = $VerificaSeExistePlaca->fetch(PDO::FETCH_ASSOC)){
            $this-> VerificaSeExistePlaca = true;
           break;
        }
    }
     }
     public function ValidaSeExistePlaca(){
        if($this->VerificaSeExistePlaca == true){
          echo "Placa Já Cadastrada";
          // Fazer um pop-up e mandar para o cadastro de volta
        }else{
            header('location:functions/insert.php');
            die();
        }
     }
}

class MostraCarrosCadastrados{
    public function RegisteredCarPickup($conecta){
     $SelectCarro = $conecta->query("SELECT id, placa, kilometragem, 
     marca, modelo, ano, proprietario from carro");
     while($LinhaCarro = $SelectCarro->fetch(PDO::FETCH_ASSOC)){
      echo '
    <section class="Tabela">
    <table>
    <tr>
        <th><h3 title="Proprietário">proprietário</h3></th>        
        <th><h3 title="Placa">Placa</h3></th>
        <th><h3 title="Marca">Marca</h3></th>
        <th><h3 title="Modelo">Modelo</h3></th>
        <th><h3 title="Ano">Ano</h3></th>
        <th><h3 title="Kilometragem">kilometragem</h3></th>
        <th><h3 title="Alterar">Ver Mais</h3></th>
    </tr>
       <tr>
        <td>'.$LinhaCarro['proprietario'].'</td>
        <td>'.$LinhaCarro['placa'].'</td>
        <td>'.$LinhaCarro['marca'].'</td>
        <td>'.$LinhaCarro['modelo'].'</td>
        <td>'.$LinhaCarro['ano'].'</td>
        <td>'.$LinhaCarro['kilometragem'].'</td>
        <td><a target="_blank" href="MaintenanceRegistration.php?IdCarro='.$LinhaCarro['id'].'">Manutenções</a></td>
     </tr>
    </table>
    </section>
      ';
}
}
}
class ManutencaoSelect{
    public $id;
public function VerificaId(){
   if(isset($_GET['IdCarro']) && is_numeric($_GET['IdCarro'])){
     return $this->id = $_GET['IdCarro'];
   }else{
    die("Houve um erro, nao existe a variavewl idcarro na url");
   }
}

public function ManutencaoSelectId($conecta){
    $IdURL = $this->id;
$SelectCarId = $conecta->query("SELECT manutencao.id, manutencao.id_carro ,manutencao.tipo_manutencao,
 manutencao.peca, manutencao.preco_peca, manutencao.observacao, manutencao.mecanico_preco, 
 manutencao.data , carro.placa, carro.modelo FROM manutencao INNER JOIN carro on manutencao.id_carro = carro.id
 WHERE manutencao.id_carro = $IdURL;
  ");      

while($SelectLinhaIdManutencao = $SelectCarId->fetch(PDO::FETCH_ASSOC)){
 
    echo '
   <aside>
    <h1>Manutenção Feita no '.$SelectLinhaIdManutencao['tipo_manutencao'].' Peça '.$SelectLinhaIdManutencao['peca'].'</h1>
    <p>Data '.$SelectLinhaIdManutencao['data'].'</p>
</aside>
<section class="Tabela">
<table>
<tr>
    <th><h3 title="Alterar Modelo"><a href="../PHP/ValidaManutencao/FormAlteraManutencao.php?IdCar='.$SelectLinhaIdManutencao['id_carro'].'&IdManutencao='.$SelectLinhaIdManutencao['id'].'&Alterar=modelo" target="_blank">Modelo</a></h3></th>      
    <th><h3 title="Alterar Peça">Peça</h3></th>        
    <th><h3 title="Alterar Preco">Preco</h3></th>
    <th><h3 title="Alterar Placa">Placa</h3></th>
    <th><h3 title="Alterar Preço mecanico">mecânico</h3></th>
</tr>
   <tr>
    <td>'.$SelectLinhaIdManutencao['modelo'].'</td>
    <td>'.$SelectLinhaIdManutencao['peca'].'</td>
    <td>R$ '.$SelectLinhaIdManutencao['preco_peca'].'</td>
    <td>'.$SelectLinhaIdManutencao['placa'].'</td>
    <td>R$ '.$SelectLinhaIdManutencao['mecanico_preco'].'</td>
 </tr>
</table>
</section>
<aside>
    <h1>Observações</h1>
    <p>'.$SelectLinhaIdManutencao['observacao'].'</p>
    <button class="AlterarButton">Alterar</button>
    <button class="PdfButton">Gerar PDF</button>
    <button class="PlanilhaButton">Gerar Planilha</button>
</aside>
   ';
}
 
}
}
$ManutencaoSelect = new ManutencaoSelect();
$MostraCarroCadastrado = new MostraCarrosCadastrados();
$SelectCadastroCarro = new SelectCadastroCarro();
$ManutencaoSelect = new ManutencaoSelect();
$ManutencaoSelect -> VerificaId();
