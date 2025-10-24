<?php
class Banco_DB {
    protected $conn;

    public function __construct() {
        $this->conecta();
    }

    private function conecta() {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=infocar', 'root', '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getConn() {
        return $this->conn;
    }
}
?>
