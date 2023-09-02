<?php

class FiltrarAlumnos{

    public function obtenerBd($nombre, $apellido){
        require("conexion.php");

        $query = "SELECT A.nombre AS NombreAlumno, A.apellido AS ApellidoAlumno, M.nombreMateria AS Materia
        FROM alumno AS A
        INNER JOIN AlumnoMateria AS AM ON A.legajoAlum = AM.legajoAlum
        INNER JOIN materia AS M ON AM.IdMateria = M.IdMateria
        WHERE A.nombre LIKE '%$nombre%' AND A.apellido LIKE '%$apellido%'";
        
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
        
}
}
?>