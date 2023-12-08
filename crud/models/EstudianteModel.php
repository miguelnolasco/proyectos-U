<?php
class EstudianteModel {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function obtenerEstudiantes() {
        $query = "SELECT * FROM estudiantes";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregarEstudiante($data) {
        $sql = "INSERT INTO estudiantes (nombre_completo, carrera, ciclo_actual, edad, direccion)
                VALUES (:nombre_completo, :carrera, :ciclo_actual, :edad, :direccion)";
    
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
        return $stmt->rowCount() > 0;
    }
    

    public function obtenerEstudiantePorId($id) {
        $query = "SELECT * FROM estudiantes WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editarEstudiante($id, $data) {
        $query = "UPDATE estudiantes
                  SET nombre_completo = :nombre_completo, carrera = :carrera, ciclo_actual = :ciclo_actual,
                      edad = :edad, direccion = :direccion
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function eliminarEstudiante($id) {
        $query = "DELETE FROM estudiantes WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
