<?php

class Banco_DB{
    public $conn;
        public function conecta(){
            try {
         
                $Conecta =  new PDO('mysql:host=localhost;dbname=infocar', 'root', '');
                  $Conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  return $Conecta;
              } catch(PDOException $e) {
                  echo 'ERROR: ' . $e->getMessage();
              }
            
        
      } 
    }
    $Banco = new Banco_DB();
    $Conecta = $Banco -> conecta();
?>