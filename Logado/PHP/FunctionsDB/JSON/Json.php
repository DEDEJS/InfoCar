<?php
include_once("../../Banco/Banco.php");

class ReturnJsonDB extends Banco_DB {

    public function JsonMarca() {
        $stmt = $this->conn->query("SELECT id, nome FROM marcas ORDER BY nome");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }

    public function JsonModelos() {
        $stmt = $this->conn->query("SELECT id, id_marca, nome FROM modelos");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
}

$JsonDB = new ReturnJsonDB();


?>
