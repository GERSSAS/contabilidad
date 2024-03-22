<?php
class Connection {
    private $host = 'localhost';
    private $db_name = 'gers_contable';
    private $username = 'GERSEN';
    private $password = 'gers1999';
    public $conn;

    // Método para conectar a la base de datos
    public function getConnect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>