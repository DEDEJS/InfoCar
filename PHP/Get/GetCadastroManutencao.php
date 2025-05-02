<?php 
 class GetCadastroManutencao{
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
    public function GetValorPeca(){
        if(isset($_POST['ValorPeca'])){
            return htmlspecialchars($_POST['ValorPeca']);
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
    public function Getobservacao(){
        if(isset($_POST['observacao'])){
            return htmlspecialchars($_POST['observacao']);
           }
    }
 }
 $GetCadastroManutencao = new GetCadastroManutencao();
 $GetValuePecaManutencao = $GetCadastroManutencao -> GetPeca();
 $GetValueValorManutencao = $GetCadastroManutencao -> GetValorPeca();
 $GetValueMaoDeObraManutencao = $GetCadastroManutencao -> GetMaoDeObra();
 $GetValueLocalManutencao = $GetCadastroManutencao -> GetLocalManutencao();
 $GetValueObservacaoManutencao = $GetCadastroManutencao -> GetObservacao();