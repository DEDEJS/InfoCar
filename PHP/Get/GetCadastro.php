<?php 
 class GetCadastro{
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
 }
 $GetCadastro = new GetCadastro();
