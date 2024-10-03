<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'asistencia';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function connect() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                  $this->username, 
                                  $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $this->conn;
    }
    public function ejecutarConsulta($query) {
        try {
            $this->connect(); // Asumiendo que esta función conecta con la base de datos
            $datos = $this->conn->query($query)->fetchAll(); // Ejecuta y devuelve los resultados
            return $datos;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false; // Retorna false en caso de error
        }
    }
    

   
   

}

   
