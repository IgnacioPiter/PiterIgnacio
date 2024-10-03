<?php

class Alumno {
    private $conn;
    private $table = 'alumno';
    //public $id;
    //public $nombre;
    //public $apellido;
    //public $dni;
    //public $email;
    //public $materia;
    //public $fecha_nacimiento;
    
    
    
    // Método para crear un nuevo alumno
    public function setAlumno($database, $nombre, $apellido, $dni, $email, $materia, $fecha_nacimiento) {
        $query = "INSERT INTO " . $this->table . " (nombre, apellido, dni, email, materia, fecha_nacimiento) 
        VALUES (:nombre, :apellido, :dni, :email, :materia, :fecha_nacimiento)";
        
        $stmt = $database->conn->prepare($query);
        //$stmt -> execute(); // ejecuta la consoola
        //$alumno = $stmt -> fetchAll(); //devuelve los datos
        
        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':materia', $materia);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAlumno($database, $id){
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $database->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $alumno = $stmt->fetchAll();

        return $alumno;
    }

    // Otros métodos (read, update, delete) se podrían implementar aquí
}