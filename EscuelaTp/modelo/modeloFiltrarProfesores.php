<?php

class FiltrarProfesor{
    private $conn;

    public function obtenerBd($nombre, $apellido){
        require("conexion.php");
        $query = "SELECT P.nombre AS NombreProfesor, P.apellido AS ApellidoProfesor, M.nombreMateria AS Materia
        FROM profesor AS P
        INNER JOIN ProfesorMateria AS PM ON P.legajoProf = PM.legajoProf
        INNER JOIN materia AS M ON PM.IdMateria = M.IdMateria
        WHERE P.nombre LIKE '%$nombre%' AND P.apellido LIKE '%$apellido%'";
        
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
        
}
}
?>