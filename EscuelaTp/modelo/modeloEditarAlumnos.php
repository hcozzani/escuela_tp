<?php

class EditarAlumnos {

    public function obtenerBd($legajo, $materia){

        require("conexion.php");
        $query = "CALL EditarMateriaAlumno($legajo, '$materia')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
    } 
}
?>
