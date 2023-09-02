<?php

class ListarAlumno{
    private $conn;

    public function obtenerBd($apellido, $nombre){
        require("conexion.php");
        $query = "SELECT a.nombre AS NombreAlumno, a.apellido AS ApellidoAlumno, m.nombreMateria AS Materia,
        m.aula AS Aula, m.duracion AS Duracion FROM alumno a JOIN alumnomateria am ON a.legajoAlum = am.legajoAlum
        JOIN materia m ON am.IdMateria = m.IdMateria";
        
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
        
}
}
?>