<?php

class EditarProfesor {
    private $conn;

    public function obtenerBd($legajo, $materia){

        require("conexion.php");
        $query = "CALL EditarMateriaProfesor($legajo,'$materia')";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
    } 
}
?>
