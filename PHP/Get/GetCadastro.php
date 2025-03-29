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
 }
 $GetCadastro = new GetCadastro();
