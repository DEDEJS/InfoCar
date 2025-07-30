<?php 
 class GetDadosInput{
    public function GetPlaca(){
        if(isset($_POST['Placa'])){
            return htmlspecialchars($_POST['Placa']);
        }
    }
    public function GetMarca(){
        if(isset($_POST['Marca'])){
         return htmlspecialchars($_POST['Marca']);
        }
    }
    public function GetModelo(){
        if(isset($_POST['Modelo'])){
            return htmlspecialchars($_POST['Modelo']);
           }
    }
    public function GetMeuCarro(){
        if(isset($_POST['MeuCarro'])){
            return htmlspecialchars($_POST['MeuCarro']);
        }
    }
    public function GetQuilometragem(){
        if(isset($_POST['Quilometragem'])){
            return htmlspecialchars($_POST['Quilometragem']);
        }
    }


     public function GetTipoManutencao(){
        if(isset($_POST['tipo'])){
            return htmlspecialchars($_POST['tipo']);
        }
    }
    public function GetPeca(){
        if(isset($_POST['Peca'])){
         return htmlspecialchars($_POST['Peca']);
        }
    }
    public function GetPecaCodigo(){
        if(isset($_POST['PecaCodigo'])){
         return htmlspecialchars($_POST['PecaCodigo']);
        }
    }
    public function GetFabricanteCodigo(){
        if(isset($_POST['PecaFabricante'])){
         return htmlspecialchars($_POST['PecaFabricante']);
        }
    }
    public function GetValorPeca(){
        if(isset($_POST['ValorPeca'])){
            return htmlspecialchars($_POST['ValorPeca']);
           }
    }
        public function GetQuantidadePeca(){
        if(isset($_POST['QuantidadePeca'])){
            return htmlspecialchars($_POST['QuantidadePeca']);
           }
    }
    public function GetMaoDeObra(){
        if(isset($_POST['MaoDeObra'])){
            return htmlspecialchars($_POST['MaoDeObra']);
           }
    }
    public function GetLocalManutencao(){
        if(isset($_POST['LocalManutencao'])){
            return htmlspecialchars($_POST['LocalManutencao']);
           }
    }
    public function GetData(){
        if(isset($_POST['Data'])){
            return htmlspecialchars($_POST['Data']);
           }
    }
    public function GetDataProximaManutencao(){
        if(isset($_POST['DataProximaManutencao'])){
            return htmlspecialchars($_POST['DataProximaManutencao']);
           }
    }
      public function GetQuilometragemAtual(){
        if(isset($_POST['QuilometragemAtual'])){
            return htmlspecialchars($_POST['QuilometragemAtual']);
        }
    }
    public function Getobservacao(){
        if(isset($_POST['observacao'])){
            return htmlspecialchars($_POST['observacao']);
           }
    }
    public function GetTipoServico(){
         if(isset($_POST['TipoServico'])){
            return htmlspecialchars($_POST['TipoServico']);
           }
    }
     public function GetStatus(){
         if(isset($_POST['TipoServico'])){
            return htmlspecialchars($_POST['TipoServico']);
           }
    }
   
 }
 $GetDadosInput = new GetDadosInput();
